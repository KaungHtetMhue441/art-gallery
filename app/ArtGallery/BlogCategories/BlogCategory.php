<?php

namespace App\ArtGallery\BlogCategories;

use App\ArtGallery\Blogs\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
