<?php

namespace App\ArtGallery\ArtWorks;

use App\ArtGallery\Artists\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Filters\ArtWorks\ArtWorksFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use App\ArtGallery\ArtWorkMaterial\ArtWorkMaterial;
use App\ArtGallery\ArtWorkMedium\ArtWorkMedium;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'art_work_category_id',
        'artist_id',
        'title',
        'size',
        'art_work_medium_id',
        'art_work_material_id',
        'price',
        'currency',
        'year',
        'description',
        'cover_photo',
        'images',
    ];

    protected $casts = [
        "images"=>"array"
    ];

    public function scopeFilter(Builder $builder)
    {
        $filter = new ArtWorksFilter();
        return $filter->apply($builder);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class,'artist_id','id');
    }

    public function medium()
    {
        return $this->belongsTo(ArtWorkMedium::class, 'art_work_medium_id', 'id');
    }

    public function material()
    {
        return $this->belongsTo(ArtWorkMaterial::class, 'art_work_material_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ArtWorkCategory::class,'art_work_category_id','id');
    }

    public function getCoverPhotoUrlAttribute(){
        return '/storage/artWorks/'.$this->cover_photo;
    }

    public function getImagesWithUrlAttribute()
    {
        $images = collect($this->images)->sortBy('original_name');
        foreach($images as $image){
            $image->name = '/storage/artWorks/'.$image->name;
        }
        return $images;
    }

    public function images():Attribute
    {
        return Attribute::make(
            get:fn($value) => json_decode($value)
        );
    }

}