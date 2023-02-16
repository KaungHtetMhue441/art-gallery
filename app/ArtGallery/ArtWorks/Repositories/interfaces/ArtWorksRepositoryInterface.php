<?php

namespace App\ArtGallery\ArtWorks\Repositories\interfaces;


interface ArtWorksRepositoryInterface
{
    public function getAll();
    public function store($artWork);

}
