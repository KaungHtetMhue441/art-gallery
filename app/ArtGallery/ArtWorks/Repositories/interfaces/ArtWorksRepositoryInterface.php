<?php

namespace App\ArtGallery\ArtWorks\Repositories\interfaces;

use Illuminate\Support\Facades\Request;

interface ArtWorksRepositoryInterface
{
    public function getAll();
    public function store($artWork);

}
