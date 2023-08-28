<?php

namespace App\ArtGallery\Exhibitions\Repositories;

use Illuminate\Support\Collection;
use App\ArtGallery\Exhibitions\Exhibition;
use App\ArtGallery\Exhibitions\Repositories\interfaces\ExhibitionsRepositoryInterface;

class ExhibitionRepository implements ExhibitionsRepositoryInterface
{
    /**
     * Get all exhibitions
     * @return Collection
     */
     public function getAll() :Collection
     {
        return Exhibition::all();
     }
         /**
     * Get some exhibitions
     * @return Collection
     */
    public function get($page,$orders=[]){
        $exhibitions = Exhibition::query();
        if(!empty($orders)){
            foreach($orders as $order){
                $exhibitions->orderBy($order);

            }
        }
        return $exhibitions->paginate($page);
    }
     /**
     * Store exhibitions
     * @return model
     */
    public function store($exhibition) :Exhibition
    {
         return Exhibition::create($exhibition);
    }
}
