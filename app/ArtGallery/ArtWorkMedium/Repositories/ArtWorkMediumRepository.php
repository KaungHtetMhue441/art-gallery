<?php

namespace App\ArtGallery\ArtWorkMedium\Repositories;

use App\ArtGallery\ArtWorkMedium\ArtWorkMedium;
use App\ArtGallery\ArtWorkMedium\Exceptions\ArtWorkMediumDeleteFailException;
use App\ArtGallery\ArtWorkMedium\Exceptions\ArtWorkMediumNotFoundException;
use App\ArtGallery\ArtWorkMedium\Exceptions\ArtWorkMediumUpdateFailException;
use App\ArtGallery\ArtWorkMedium\Repositories\interfaces\ArtWorkMediumRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArtWorkMediumRepository implements ArtWorkMediumRepositoryInterface
{
   public function __construct(private ArtWorkMedium $model)
   {
      $this->model = $model;
   }

   /**
    * Get all ArtWorkMedium
    * 
    * @param array $columns
    * 
    * @return Collection 
    */
   public function getAll($columns = ['*']): Collection
   {
      return $this->model->all($columns);
   }

   /**
    * Get ArtWorkMedium by Id
    * 
    * @param int $id
    * 
    * @return ArtWorkMedium 
    */
   public function getArtWorkMediumById($id): ArtWorkMedium
   {
      try {
         return $this->model->findOrFail($id);
      } catch (ModelNotFoundException $e) {
         throw new ArtWorkMediumNotFoundException;
      }
   }

   /**
    * Create ArtWorkMedium
    * 
    * @param array $params
    * 
    * @return ArtWorkMedium 
    */
   public function createArtWorkMedium(array $params): ArtWorkMedium
   {
      return $this->model->create($params);
   }

   /**
    * Update ArtWorkMedium
    * 
    * @param int $id
    * @param array $params
    * 
    * @return ArtWorkMedium 
    */
   public function updateArtWorkMedium(int $id, array $params): ArtWorkMedium
   {
      $image = $this->getArtWorkMediumById($id);

      throw_if(!$image->update($params), ArtWorkMediumUpdateFailException::class);

      return $image->fresh();
   }

   /**
    * Update ArtWorkMedium
    * 
    * @param int $id
    * 
    * @return ArtWorkMedium 
    */
   public function deleteArtWorkMedium(int $id): bool
   {
      $image = $this->getArtWorkMediumById($id);

      throw_if(!$image->delete($id), ArtWorkMediumDeleteFailException::class);

      return true;
   }
}
