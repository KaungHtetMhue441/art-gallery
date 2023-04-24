<?php

namespace App\ArtGallery\ArtWorkMaterial\Repositories;

use App\ArtGallery\ArtWorkMaterial\ArtWorkMaterial;
use App\ArtGallery\ArtWorkMaterial\Exceptions\ArtWorkMaterialDeleteFailException;
use App\ArtGallery\ArtWorkMaterial\Exceptions\ArtWorkMaterialNotFoundException;
use App\ArtGallery\ArtWorkMaterial\Exceptions\ArtWorkMaterialUpdateFailException;
use App\ArtGallery\ArtWorkMaterial\Repositories\interfaces\ArtWorkMaterialRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArtWorkMaterialRepository implements ArtWorkMaterialRepositoryInterface
{
   public function __construct(private ArtWorkMaterial $model)
   {
      $this->model = $model;
   }

   /**
    * Get all ArtWorkMaterial
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
    * Get ArtWorkMaterial by Id
    * 
    * @param int $id
    * 
    * @return ArtWorkMaterial 
    */
   public function getArtWorkMaterialById($id): ArtWorkMaterial
   {
      try {
         return $this->model->findOrFail($id);
      } catch (ModelNotFoundException $e) {
         throw new ArtWorkMaterialNotFoundException;
      }
   }

   /**
    * Create ArtWorkMaterial
    * 
    * @param array $params
    * 
    * @return ArtWorkMaterial 
    */
   public function createArtWorkMaterial(array $params): ArtWorkMaterial
   {
      return $this->model->create($params);
   }

   /**
    * Update ArtWorkMaterial
    * 
    * @param int $id
    * @param array $params
    * 
    * @return ArtWorkMaterial 
    */
   public function updateArtWorkMaterial(int $id, array $params): ArtWorkMaterial
   {
      $image = $this->getArtWorkMaterialById($id);

      throw_if(!$image->update($params), ArtWorkMaterialUpdateFailException::class);

      return $image->fresh();
   }

   /**
    * Update ArtWorkMaterial
    * 
    * @param int $id
    * 
    * @return ArtWorkMaterial 
    */
   public function deleteArtWorkMaterial(int $id): bool
   {
      $image = $this->getArtWorkMaterialById($id);

      throw_if(!$image->delete($id), ArtWorkMaterialDeleteFailException::class);

      return true;
   }
}
