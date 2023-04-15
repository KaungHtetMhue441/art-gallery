<?php

namespace App\ArtGallery\ArtWorkMedium;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtWorkMedium extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];
}
