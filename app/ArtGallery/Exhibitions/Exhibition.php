<?php

namespace App\ArtGallery\Exhibitions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
