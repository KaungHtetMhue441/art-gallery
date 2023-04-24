<?php

namespace App\ArtGallery\Blogs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\ArtGallery\BlogCategories\BlogCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $casts = [
        "images"=>"array"
    ];

    public function blogCategory()
    {
       return  $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }
    public function getCoverPhotoUrlAttribute(){
        return Storage::disk('public')->url('/blogs/'.$this->cover_photo);
    }

    public function getImagesWithUrlAttribute()
    {
        $images = collect(json_decode($this->images))->sortBy('original_name');
        foreach($images as $image){
            $image->name = Storage::disk('public')->url('/blogs/'.$image->name);
        }
        return $images;
    }
}
