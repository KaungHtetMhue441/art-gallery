<?php

namespace App\ArtGallery\Blogs\Repositories;

use App\ArtGallery\Blogs\Blog;
use Illuminate\Support\Collection;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    /**
     * Get all blogs
     * @return Collection
     */
     public function getAll() :Collection
     {
        return Blog::all();
     }
     /**
     * Store artists
     * @return model
     */
    public function store($exhibition) :Exhibition
    {
        $exhibition = Exhibition::create($exhibition);
        throw_if(!$exhibition,ExhibitionCreateFailException::class);
        return $exhibition;
    }

}
