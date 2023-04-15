<?php

namespace App\ArtGallery\ArtWorkMedium\Repositories\interfaces;

use App\ArtGallery\ArtWorkMedium\ArtWorkMedium;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


interface ArtWorkMediumRepositoryInterface
{
    public function getAll() :EloquentCollection;

    public function createArtWorkMedium(array $params) :ArtWorkMedium;

    public function updateArtWorkMedium(int $id, array $params) :ArtWorkMedium;

    public function deleteArtWorkMedium(int $id) :bool;

    public function getArtWorkMediumById(int $id) :ArtWorkMedium;
}
