<?php

namespace App\ArtGallery\ArtWorks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
