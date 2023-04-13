<?php

namespace App\ArtGallery\ImageSlider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'description'
    ];
}
