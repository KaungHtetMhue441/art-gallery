<?php

namespace App\ArtGallery\ArtWorkMaterial\Repositories\interfaces;

use App\ArtGallery\ArtWorkMaterial\ArtWorkMaterial;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


interface ArtWorkMaterialRepositoryInterface
{
    public function getAll() :EloquentCollection;

    public function createArtWorkMaterial(array $params) :ArtWorkMaterial;

    public function updateArtWorkMaterial(int $id, array $params) :ArtWorkMaterial;

    public function deleteArtWorkMaterial(int $id) :bool;

    public function getArtWorkMaterialById(int $id) :ArtWorkMaterial;
}
