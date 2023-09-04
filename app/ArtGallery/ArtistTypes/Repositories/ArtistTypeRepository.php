<?php

namespace App\ArtGallery\ArtistTypes\Repositories;

use App\ArtGallery\ArtistTypes\ArtistType;
use App\ArtGallery\ArtistTypes\Repositories\interfaces\ArtistTypeRepositoryInterface;
use App\ArtGallery\ArtistTypes\Exceptions\ArtistTypeDeleteFailException;
use App\ArtGallery\ArtistTypes\Exceptions\ArtistTypeNotFoundException;
use App\ArtGallery\ArtistTypes\Exceptions\ArtistTypeUpdateFailException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;

class ArtistTypeRepository implements ArtistTypeRepositoryInterface
{
   public function __construct(private ArtistType $model)
   {
      $this->model = $model;
   }

   /**
    * Get all ArtistType
    * 
    * @param array $columns
    * 
    * @return Collection 
    */
   public function getAll($pages='',$columns = ['*']): LengthAwarePaginator
   {
      return $this->model->select($columns)->paginate($pages);
   }

   /**
    * Get ArtistType by Id
    * 
    * @param int $id
    * 
    * @return ArtistType 
    */
   public function getArtistTypeById($id): ArtistType
   {
      try {
         return $this->model->findOrFail($id);
      } catch (ModelNotFoundException $e) {
         throw new ArtistTypeNotFoundException;
      }
   }

   /**
    * Create ArtistType
    * 
    * @param array $params
    * 
    * @return ArtistType 
    */
   public function createArtistType(array $params): ArtistType
   {
      return $this->model->create($params);
   }

   /**
    * Update ArtistType
    * 
    * @param int $id
    * @param array $params
    * 
    * @return ArtistType 
    */
   public function updateArtistType(int $id, array $params): ArtistType
   {
      $image = $this->getArtistTypeById($id);

      throw_if(!$image->update($params), ArtistTypeUpdateFailException::class);

      return $image->fresh();
   }

   /**
    * Update ArtistType
    * 
    * @param int $id
    * 
    * @return ArtistType 
    */
   public function deleteArtistType(int $id): bool
   {
      $image = $this->getArtistTypeById($id);

      throw_if(!$image->delete($id), ArtistTypeDeleteFailException::class);

      return true;
   }
}