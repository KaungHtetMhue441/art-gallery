<?php

namespace App\ArtGallery\ArtWorks;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

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


    public function artist()
    {
        $this->belongsTo(Artist::class);
    }

    public function artWorkCategory()
    {
        $this->belongsTo(ArtWorkCategory::class);
    }

    public function getCoverPhotoUrlAttribute(){
        return Storage::disk('public')->url('/artWorks/'.$this->cover_photo);
    }

    public function getImagesWithUrlAttribute()
    {
        $images = collect(json_decode($this->images))->sortBy('original_name');
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