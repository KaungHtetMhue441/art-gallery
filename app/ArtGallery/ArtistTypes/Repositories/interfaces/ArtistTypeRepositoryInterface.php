<?php

namespace App\ArtGallery\ArtistTypes\Repositories\interfaces;

use App\ArtGallery\ArtistTypes\ArtistType;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


interface ArtistTypeRepositoryInterface
{
    public function getAll(): LengthAwarePaginator;

    public function createArtistType(array $params): ArtistType;

    public function updateArtistType(int $id, array $params): ArtistType;

    public function deleteArtistType(int $id): bool;

    public function getArtistTypeById(int $id): ArtistType;
}