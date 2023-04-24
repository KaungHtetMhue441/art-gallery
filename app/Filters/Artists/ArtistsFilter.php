<?php

namespace App\Filters\Artists;

use App\Filters\Filters;

class ArtistsFilter extends Filters
{
    /**
     * Register filter properties
     */
    protected $filters = [
        'name',
        'artistType',
        'region'
    ];

     /**
     * Filter by data field.
     */
    public function keyword($value)
    {
        return $this->builder
            ->where(function ($query) use ($value) {
                $query->where('brand_name', 'LIKE', "%{$value}%");
            });
    }

    /**
     * Filter by artist's name
     */
     public function name($value)
     {
        return $this->builder->where('name','like','%'.$value.'%');
     }

    /**
     * Filter by artist's type
     */
     public function artistType($value)
     {
        return $this->builder->where('artist_type_id',$value);
     }

    /**
     * Filter by artist's region
    */
    public function region($value)
    {
        return $this->builder->where('region_id',$value);
    }

}
