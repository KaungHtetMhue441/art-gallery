<?php

namespace App\ArtGallery\Exhibitions\Repositories\interfaces;

use Illuminate\Support\Collection;
use App\ArtGallery\Exhibitions\Exhibition;

interface ExhibitionsRepositoryInterface
{
    public function getAll() :Collection;
    public function store($exhibition) :Exhibition;
}
