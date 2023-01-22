<?php

namespace App\ArtGallery\ArtWorkCategories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtWorkCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
