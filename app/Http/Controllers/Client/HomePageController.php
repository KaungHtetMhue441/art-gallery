<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;
use App\ArtGallery\ImageSlider\Repositories\interfaces\ImageSliderRepositoryInterface;

class HomePageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ImageSliderRepositoryInterface $imageSliderRepository,
        private ArtWorksRepositoryInterface $artWorkRepo,
        private BlogRepositoryInterface $blogRepo
    ) {
        //
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function index(
        Request $request
    )
    {
        return view('pages.client.index', [
            'blogs' => $this->blogRepo->getAll(),
            'images' => $this->imageSliderRepository->getAll(),
            'artworks' => $this->artWorkRepo->getLatest(3)
        ]);
    }
}