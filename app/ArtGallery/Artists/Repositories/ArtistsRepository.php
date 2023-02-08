<?php

namespace App\ArtGallery\Artists\Repositories;

use App\ArtGallery\Artists\Artist;
use Illuminate\Pagination\LengthAwarePaginator;
use App\ArtGallery\Artists\Exceptions\ArtistCreateFailException;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;

class ArtistsRepository implements ArtistsRepositoryInterface
{
    /**
     * Get all artists
     * @return Collection
     */
     public function getAll() :LengthAwarePaginator
     {
        return Artist::with('artistType','region')->paginate(10);
     }
   /**
     * Get all artists
     * @return model
     */
     public function store($artist) :Artist
     {
        return Artist::create($artist);
     }

}
