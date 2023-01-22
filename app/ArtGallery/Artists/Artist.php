<?php

namespace App\ArtGallery\Artists;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_type_id',
        'region_id',
        'name',
        'profile_image',
        'social_url'
    ];
}
