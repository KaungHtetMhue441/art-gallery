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
     public function getAll() :LengthAwarePaginator
     {
      return Blog::paginate(10);
   }
     /**
     * Store blogs
     * @return model
     */
    public function store($blog) :Blog
    {
      //dd($blog);
       return Blog::create($blog);
    }

}
