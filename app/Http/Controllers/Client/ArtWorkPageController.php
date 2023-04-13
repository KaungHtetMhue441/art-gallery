<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\ArtGallery\Artists\Artist;
use App\ArtGallery\ArtWorks\ArtWork;
use App\Http\Controllers\Controller;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use App\ArtGallery\ArtWorks\Repositories\ArtWorksRepository;

class ArtWorkPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ArtWorksRepository $artWorksRepository
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

        $artists = Artist::all();
        $categories = ArtWorkCategory::all();
        $artworks = $this->artWorksRepository->getAll();
        return view('pages.client.art-works.index', [
            "artworks" => $artworks,
            "artists" => $artists,
            "categories" => $categories
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
        $artworks = $this->artWorksRepository->getAll();
        return view('pages.client.art-works.detail', [
            "artworks" => $artworks,
            "artwork" => $artwork
        ]);
    }

    private function getTempData()
    {
        return [
            (object) [
                "id" => 1,
                "category" => (object) [
                    "name" => "Category"
                ],
                "artist" => (object) [
                    "name" => "Artist 1"
                ],
                "title" => "Artwork 1",
                "price" => 100.00,
                "currency" => "usd",
                "cover_photo" => "https://mdbcdn.b-cdn.net/img/new/slides/017.webp"
            ],
            (object) [
                "id" => 2,
                "category" => (object) [
                    "name" => "Category 2"
                ],
                "artist" => (object) [
                    "name" => "Artist 2"
                ],
                "title" => "Artwork 2",
                "price" => 120.00,
                "currency" => "usd",
                "cover_photo" => "https://mdbcdn.b-cdn.net/img/new/slides/018.webp"
            ],
            (object) [
                "id" => 3,
                "category" => (object) [
                    "name" => "Category 3"
                ],
                "artist" => (object) [
                    "name" => "Artist 3"
                ],
                "title" => "Artwork 3",
                "price" => 100000.00,
                "currency" => "mmk",
                "cover_photo" => "https://mdbcdn.b-cdn.net/img/new/slides/019.webp"
            ],
        ];
    }
}
