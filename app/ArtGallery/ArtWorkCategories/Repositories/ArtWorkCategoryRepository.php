<?php

namespace App\ArtGallery\ArtWorkCategories\Repositories;

use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use App\ArtGallery\ArtWorkCategories\Exceptions\ArtWorkCategoryDeleteFailException;
use App\ArtGallery\ArtWorkCategories\Exceptions\ArtWorkCategoryNotFoundException;
use App\ArtGallery\ArtWorkCategories\Exceptions\ArtWorkCategoryUpdateFailException;
use App\ArtGallery\ArtWorkCategories\Repositories\interfaces\ArtWorkCategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;

class ArtWorkCategoryRepository implements ArtWorkCategoryRepositoryInterface
{
   public function __construct(private ArtWorkCategory $model)
   {
      $this->model = $model;
   }

   /**
    * Get all ArtWorkCategory
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
    * Get ArtWorkCategory by Id
    * 
    * @param int $id
    * 
    * @return ArtWorkCategory 
    */
   public function getArtWorkCategoryById($id): ArtWorkCategory
   {
      try {
         return $this->model->findOrFail($id);
      } catch (ModelNotFoundException $e) {
         throw new ArtWorkCategoryNotFoundException;
      }
   }

   /**
    * Create ArtWorkCategory
    * 
    * @param array $params
    * 
    * @return ArtWorkCategory 
    */
   public function createArtWorkCategory(array $params): ArtWorkCategory
   {
      return $this->model->create($params);
   }

   /**
    * Update ArtWorkCategory
    * 
    * @param int $id
    * @param array $params
    * 
    * @return ArtWorkCategory 
    */
   public function updateArtWorkCategory(int $id, array $params): ArtWorkCategory
   {
      $image = $this->getArtWorkCategoryById($id);

      throw_if(!$image->update($params), ArtWorkCategoryUpdateFailException::class);

      return $image->fresh();
   }

   /**
    * Update ArtWorkCategory
    * 
    * @param int $id
    * 
    * @return ArtWorkCategory 
    */
   public function deleteArtWorkCategory(int $id): bool
   {
      $image = $this->getArtWorkCategoryById($id);

      throw_if(!$image->delete($id), ArtWorkCategoryDeleteFailException::class);

      return true;
   }
}