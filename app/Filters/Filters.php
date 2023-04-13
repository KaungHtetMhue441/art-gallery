<?php

namespace App\Filters;

use Illuminate\Http\Request;

abstract class Filters
{
    protected $builder;

    protected $filters = [];

    public function apply($builder)
    {
        $this->builder = $builder;
        foreach (request()->only($this->filters) as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }
}

