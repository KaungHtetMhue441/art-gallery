<?php

namespace App\ArtGallery\ArtWorks;

use App\ArtGallery\Artists\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Filters\ArtWorks\ArtWorksFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'art_work_category_id',
        'artist_id',
        'title',
        'size',
        'medium',
        'material',
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

    public function category()
    {
        return $this->belongsTo(ArtWorkCategory::class,'art_work_category_id','id');
    }

    public function getCoverPhotoUrlAttribute(){
        return Storage::disk('public')->url('/artWorks/'.$this->cover_photo);
    }

    public function getImagesWithUrlAttribute()
    {
        $images = collect($this->images)->sortBy('original_name');
        foreach($images as $image){
            $image->name = Storage::disk('public')->url('/artWorks/'.$image->name);
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