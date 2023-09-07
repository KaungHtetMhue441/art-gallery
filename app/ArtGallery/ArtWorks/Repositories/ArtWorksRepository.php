<?php

namespace App\ArtGallery\ArtWorks\Repositories;

use App\ArtGallery\ArtWorks\ArtWork;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;

class ArtWorksRepository implements ArtWorksRepositoryInterface
{

    public function getAll($pages="",$columns = ['*'])
    {
        $artWorks = ArtWork::select(...$columns)->with('artist', 'category');

        if (request('category')) {
            $artWorks->where('art_work_category_id', request('category'));
        }

        if (request('artist')) {
            $artWorks->where('artist_id', 'LIKE', "%" . request('artist') . "%");
        }

        if (request('title')) {
            $artWorks->where('title', 'LIKE', "%" . request('title') . "%");
        }

        if (request('size')) {
            $artWorks->where('size', 'LIKE', "%" . request('size') . "%");
        }

        if (request('medium')) {
            $artWorks->where('art_work_medium_id', request('medium'));
        }

        if (request('material')) {
            $artWorks->where('art_work_material_id', request('material'));
        }

        if (request('price')) {
            $artWorks->where('price', 'LIKE', "%" . request('price') . "%");
        }

        if (request('currency')) {
            $artWorks->where('currency', 'LIKE', "%" . request('currency') . "%");
        }

        if (request('year')) {
            $artWorks->where('year', 'LIKE', "%" . request('year') . "%");
        }

        return $artWorks->orderby("created_at", 'DESC')->paginate($pages)->appends(request()->all());
    }

    public function store($artWork)
    {
        return ArtWork::create($artWork);
    }

    public function getRandomByCategory($id, $category, $take = 4)
    {
        return ArtWork::where('art_work_category_id', $category)
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->take($take)
            ->paginate(7);
    }

    public function getLatest($take = 3, $columns = ['*'])
    {
        return ArtWork::latest()
            ->take($take)
            ->get($columns);
    }

    public function getByTitle($titles)
    {
        $artwork = ArtWork::query();

        foreach ($titles as $title) {
            $artwork->orWhere('title', 'like', "%" . $title . "%");
        }

        // return $artwork->toSql();
        return $artwork->paginate(10);
    }
}