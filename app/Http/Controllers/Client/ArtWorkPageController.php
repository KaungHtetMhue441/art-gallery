<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\ArtGallery\Artists\Artist;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\ArtWorks\ArtWork;
use App\Http\Controllers\Controller;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use App\ArtGallery\ArtWorkCategories\Repositories\interfaces\ArtWorkCategoryRepositoryInterface;
use App\ArtGallery\ArtWorkMaterial\Repositories\interfaces\ArtWorkMaterialRepositoryInterface;
use App\ArtGallery\ArtWorkMedium\Repositories\interfaces\ArtWorkMediumRepositoryInterface;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;

class ArtWorkPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ArtWorksRepositoryInterface $artWorksRepository,
        private ArtistsRepositoryInterface $artistRepo,
        private ArtWorkCategoryRepositoryInterface $artworkCategoryRepo,
        private ArtWorkMediumRepositoryInterface $artworkMediumRepo,
        private ArtWorkMaterialRepositoryInterface $artworkMaterialRepo
    )
    {
        //
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function index(
    )
    {

        $artists = $this->artistRepo->getAll();
        $categories = $this->artworkCategoryRepo->getAll();
        $materials = $this->artworkMaterialRepo->getAll();
        $mediums = $this->artworkMediumRepo->getAll();
        $artworks = $this->artWorksRepository->getAll([
            'id',
            'title',
            'cover_photo',
            'price',
            'currency',
            'artist_id',
            'art_work_category_id'
        ]);

        return view('pages.client.art-works.index', [
            "artworks" => $artworks,
            "artists" => $artists,
            "categories" => $categories,
            "materials" => $materials,
            "mediums" => $mediums
        ]);
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function show(
        ArtWork $artwork
    )
    {
        $artworks = $this->artWorksRepository->getRandomByCategory($artwork->id, $artwork->art_work_category_id);
        return view('pages.client.art-works.detail', [
            "artworks" => $artworks,
            "artwork" => $artwork
        ]);
    }

}
