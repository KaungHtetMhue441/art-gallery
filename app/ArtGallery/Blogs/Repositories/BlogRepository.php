<?php

namespace App\ArtGallery\Blogs\Repositories;

use App\ArtGallery\Blogs\Blog;
use Illuminate\Pagination\LengthAwarePaginator;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    /**
     * Get all blogs
     * @return Collection
     */
     public function getAll($blog='') :LengthAwarePaginator
     {
      return Blog::latest()->paginate($blog);
   }
     /**
     * Store blogs
     * @return model
     */
    public function store($blog) :Blog
    {
       return Blog::create($blog);
    }

    /**
     * get blog by slug
     * 
     * @param string $slug
     * 
     * @return model
     */
    public function getBySlug($slug)
    {
        return Blog::where('slug', $slug)->first();
    }

    public function getByCategory($categoryId, $limit = 4)
    {
        return Blog::where('blog_category_id', $categoryId)->take($limit)->get();
    }

}
