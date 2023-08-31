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
         $artists = Artist::with('artistType','region');

         if(request('name'))
         {
            $artists->where('name','like','%'.request('name').'%');
         }

         if(request('artist_type'))
         {
            $artists->where('name','like','%'.request('name').'%');
         }
         
         if(request('region'))
         {
            $artists->where('name','like','%'.request('name').'%');
         }
         
         return $artists->paginate(9);
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