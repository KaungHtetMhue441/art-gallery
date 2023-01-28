<?php

namespace App\ArtGallery\Artists\Repositories\interfaces;

use App\ArtGallery\Artists\Artist;
use Illuminate\Support\Collection;

interface ArtistsRepositoryInterface
{
    public function getAll() :Collection;
    public function store($artist) :Artist;
}
