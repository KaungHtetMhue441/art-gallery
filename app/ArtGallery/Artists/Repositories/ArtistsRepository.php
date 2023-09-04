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
   public function getAll($page = ""): LengthAwarePaginator
   {
      $artists = Artist::with('artistType', 'region');

      if (request('name')) {
         $artists->where('name', 'like', '%' . request('name') . '%');
      }

      if (request('artist_type')) {
         $artists->whereHas('artistType', function ($query) {
            return $query->where('id', request('artist_type'));
         });
      }

      if (request('region')) {
         $artists->where('name', 'like', '%' . request('name') . '%');
      }

      return $artists->orderby('created_at','DESC')->paginate($page)->appends(request()->all());
   }
   /**
    * Get all artists
    * @return model
    */
   public function store($artist): Artist
   {
      return Artist::create($artist);
   }
}