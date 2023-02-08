<?php

namespace App\ArtGallery\Artists\Repositories\interfaces;

use App\ArtGallery\Artists\Artist;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


interface ArtistsRepositoryInterface
{
    public function getAll() :LengthAwarePaginator;
    public function store($artist) :Artist;
}
