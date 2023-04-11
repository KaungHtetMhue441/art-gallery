<?php

namespace App\ArtGallery\Blogs\Repositories\interfaces;

use App\ArtGallery\Blogs\Blog;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


interface BlogRepositoryInterface
{
    public function getAll() :LengthAwarePaginator;
    public function store($blog) :Blog;
}
