<?php

namespace App\ArtGallery\ArtWorks\Repositories;

use App\ArtGallery\ArtWorks\ArtWork;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;

class ArtWorksRepository implements ArtWorksRepositoryInterface
{

    public function getAll(){
        return ArtWork::paginate(10);
    }
    public function store($artWork)
    {
        return ArtWork::create($artWork);
    }
}
