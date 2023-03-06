<?php

namespace App\Filters\ArtWorks;

use App\Filters\Filters;

class ArtWorksFilter extends Filters
{
    /**
     * Register filter properties
     */
    protected $filters = [
        'category',
        'artist',
        'title',
        'size',
        'medium',
        'material',
        'price',
        'currency',
        'year',
    ];

         /**
     * Filter by data field.
     */
    public function keyword($value)
    {
        return $this->builder
            ->where('brand_name', 'LIKE', "%{$value}%");
    }

    /**
     * Filter by artWork's Category
     */
    public function title($value)
    {
        return $this->builder
            ->where('title','like','%'.$value.'%');
    }

    /**
     * Filter by artWork's Category
     */
    public function size($value)
    {
        return $this->builder
            ->where('size','like','%'.$value.'%');
    }

    /**
     * Filter by artWork's Category
     */
    public function medium($value)
    {
        return $this->builder
            ->where('medium','like','%'.$value.'%');
    }

    /**
     * Filter by artWork's Category
     */
    public function material($value)
    {
        return $this->builder
            ->where('material','like','%'.$value.'%');
    }

    /**
     * Filter by artWork's Category
     */
    public function price($value)
    {
        return $this->builder
            ->where('price','like','%'.$value.'%');
    }

    /**
     * Filter by artWork's Category
     */
    public function currency($value)
    {
        return $this->builder
            ->where('currency','like','%'.$value.'%');
    }

        /**
     * Filter by artWork's Category
     */
    public function year($value)
    {
        return $this->builder
            ->where('year','like','%'.$value.'%');
    }

    /**
     * Filter by artWork's Category
     */
    public function category($value)
    {
        return $this->builder
            ->where('art_work_category_id',$value);
    }

    /**
     * Filter by artist's name
     */
    public  function artist($value)
    {
        return $this->builder
            ->where('artist_id',$value);
    }

}
