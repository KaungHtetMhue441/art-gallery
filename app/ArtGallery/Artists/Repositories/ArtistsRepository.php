<?php

namespace App\ArtGallery\Artists\Repositories;

use App\ArtGallery\Artists\Artist;
use App\ArtGallery\Artists\Exceptions\ArtistCreateFailException;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use Illuminate\Support\Collection;

class ArtistsRepository implements ArtistsRepositoryInterface
{
    /**
     * Get all artists
     * @return Collection
     */
     public function getAll() :Collection
     {
        return Artist::all();
     }
   /**
     * Get all artists
     * @return model
     */
     public function store($artist) :Artist
     {
         $artist = Artist::create($artist);
        //  $artist = '';
         throw_if(!$artist,ArtistCreateFailException::class);
         return $artist;
     }

}
