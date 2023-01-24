<?php

namespace App\ArtGallery\Artists\Repositories\interfaces;

use Illuminate\Support\Collection;

interface ArtistsRepositoryInterface
{
    public function getAll() :Collection;
}
