<?php

namespace App\ArtGallery\Blogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blog_category_id',
        'title_mm',
        'title_en',
        'description_mm',
        'description_en',
        'slug',
        'cover_photo',
        'images',
    ];
}
