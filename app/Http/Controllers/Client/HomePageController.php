<?php

namespace App\Http\Controllers\Client;

use App\ArtGallery\ImageSlider\Repositories\interfaces\ImageSliderRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ImageSliderRepositoryInterface $imageSliderRepository
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
        Request $request
    )
    {
        return view('pages.client.index', [
            'images' => $this->imageSliderRepository->getAll()
        ]);
    }
}
