<?php

namespace App\ArtGallery\Exhibitions\Repositories\interfaces;

use Illuminate\Support\Collection;

interface ExhibitionsRepositoryInterface
{
    public function getAll() :Collection;
}
