<?php

namespace App\ArtGallery\ImageSlider\Repositories\interfaces;

use App\ArtGallery\ImageSlider\ImageSlider;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


interface ImageSliderRepositoryInterface
{
    public function getAll() :EloquentCollection;

    public function createImageSlider(array $params) :ImageSlider;

    public function updateImageSlider(int $id, array $params) :ImageSlider;

    public function deleteImageSlider(int $id) :bool;

    public function getImageById(int $id) :ImageSlider;
}
