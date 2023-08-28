<?php

namespace App\ArtGallery\Exhibitions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title_mm',
        'title_en',
        'description_mm',
        'description_en',
        'exhibition_date',
        'exhibition_start_time',
        'cover_photo',
    ];

    public function getCoverPhotoUrlAttribute()
    {
        return "/storage/exhibitions/" . $this->cover_photo;
    }
}
