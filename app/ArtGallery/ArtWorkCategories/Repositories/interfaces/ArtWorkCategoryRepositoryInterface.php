<?php

namespace App\ArtGallery\ArtWorkCategories\Repositories\interfaces;

use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ArtWorkCategoryRepositoryInterface
{
    public function getAll() :LengthAwarePaginator;

    public function createArtWorkCategory(array $params) :ArtWorkCategory;

    public function updateArtWorkCategory(int $id, array $params) :ArtWorkCategory;

    public function deleteArtWorkCategory(int $id) :bool;

    public function getArtWorkCategoryById(int $id) :ArtWorkCategory;
}