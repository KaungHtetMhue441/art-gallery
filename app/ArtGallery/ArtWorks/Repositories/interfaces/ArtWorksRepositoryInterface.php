<?php

namespace App\ArtGallery\ArtWorks\Repositories\interfaces;

use Illuminate\Support\Facades\Request;

interface ArtWorksRepositoryInterface
{
    public function getAll();
    public function store($artWork);
    public function getRandomByCategory($id, $category, $take = 4);
    public function getLatest($take = 3, $cloumns = ['*']);
}
