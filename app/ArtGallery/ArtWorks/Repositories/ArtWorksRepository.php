<?php

namespace App\ArtGallery\ArtWorks\Repositories;

use App\ArtGallery\ArtWorks\ArtWork;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;

class ArtWorksRepository implements ArtWorksRepositoryInterface
{

    public function getAll()
    {
        $artWorks = ArtWork::with('artist','category');

        if(request('category'))
        {
            $artWorks->where('art_work_category_id', 'LIKE', "%".request('category')."%");
        }

        if(request('artist'))
        {
            $artWorks->where('artist_id', 'LIKE', "%".request('artist')."%");
        }

        if(request('title'))
        {
            $artWorks->where('title', 'LIKE', "%".request('title')."%");
        }
        
        if(request('size'))
        {
            $artWorks->where('size', 'LIKE', "%".request('size')."%");
        }
        
        if(request('medium'))
        {
            $artWorks->where('medium', 'LIKE', "%".request('medium')."%");
        }
        
        if(request('material'))
        {
            $artWorks->where('material', 'LIKE', "%".request('material')."%");
        }
        
        if(request('price'))
        {
            $artWorks->where('price', 'LIKE', "%".request('price')."%");
        }

        if(request('price'))
        {
            $artWorks->where('price', 'LIKE', "%".request('price')."%");
        }

        if(request('price'))
        {
            $artWorks->where('price', 'LIKE', "%".request('price')."%");
        }

        if(request('currency'))
        {
            $artWorks->where('currency', 'LIKE', "%".request('currency')."%");
        }

        if(request('year'))
        {
            $artWorks->where('year', 'LIKE', "%".request('year')."%");
        }

        return $artWorks->paginate(10);
    }

    public function store($artWork)
    {
        return ArtWork::create($artWork);
    }
}
