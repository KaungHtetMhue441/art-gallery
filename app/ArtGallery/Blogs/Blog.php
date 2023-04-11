<?php

namespace App\ArtGallery\Blogs;

use Illuminate\Database\Eloquent\Model;
use App\ArtGallery\BlogCategories\BlogCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function blogCategory()
    {
       return  $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }
}
