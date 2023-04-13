<?php

namespace App\ArtGallery\ImageSlider\Repositories;

use App\ArtGallery\ImageSlider\Exceptions\ImageSliderDeleteFailException;
use App\ArtGallery\ImageSlider\Exceptions\ImageSliderNotFoundException;
use App\ArtGallery\ImageSlider\Exceptions\ImageSliderUpdateFailException;
use App\ArtGallery\ImageSlider\Repositories\interfaces\ImageSliderRepositoryInterface;
use App\ArtGallery\ImageSlider\ImageSlider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ImageSliderRepository implements ImageSliderRepositoryInterface
{
   public function __construct(private ImageSlider $model)
   {
      $this->model = $model;
   }

   /**
    * Get all ImageSlider
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
    * Get ImageSlider by Id
    * 
    * @param int $id
    * 
    * @return ImageSlider 
    */
   public function getImageById($id): ImageSlider
   {
      try {
         return $this->model->findOrFail($id);
      } catch (ModelNotFoundException $e) {
         throw new ImageSliderNotFoundException;
      }
   }

   /**
    * Create ImageSlider
    * 
    * @param array $params
    * 
    * @return ImageSlider 
    */
   public function createImageSlider(array $params): ImageSlider
   {
      return $this->model->create($params);
   }

   /**
    * Update ImageSlider
    * 
    * @param int $id
    * @param array $params
    * 
    * @return ImageSlider 
    */
   public function updateImageSlider(int $id, array $params): ImageSlider
   {
      $image = $this->getImageById($id);

      throw_if(!$image->update($params), ImageSliderUpdateFailException::class);

      return $image->fresh();
   }

   /**
    * Update ImageSlider
    * 
    * @param int $id
    * 
    * @return ImageSlider 
    */
   public function deleteImageSlider(int $id): bool
   {
      $image = $this->getImageById($id);

      throw_if(!$image->delete($id), ImageSliderDeleteFailException::class);

      return true;
   }
}
