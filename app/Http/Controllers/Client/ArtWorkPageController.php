<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtWorkPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
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
        $artworks = $this->getTempData();

        return view('pages.client.art-works.index', [
            "artworks" => $artworks
        ]);
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function show(
        Request $request
    )
    {
        $artworks = $this->getTempData();

        $artwork = (object) [
            "id" => 1,
            "category" => (object) [
                "name" => "Category"
            ],
            "artist" => (object) [
                "name" => "Artist 1"
            ],
            "title" => "Artwork 1",
            "size" => "40 x 40 cm",
            "medium" => "Oil",
            "material" => "Canvas",
            "price" => 100.00,
            "currency" => "usd",
            "year" => 2022,
            "description" => "It's summer, my feet in a pink water, I do nothing, a sweet moment of joy. 
            This piece is one the middle-slightly larger paintings from my collection. I used oil paint in thin layers, applied by paintbrushes and also by fingers and hands, thanks to that there is an illusion of transparent water and also the structure of a canvas is well distinguishable. The feet are strongly pronounced thanks to the sharp lines and dark colours.",
            "cover_photo" => "https://mdbcdn.b-cdn.net/img/new/slides/017.webp",
            "images" => [
                "https://mdbcdn.b-cdn.net/img/new/slides/011.webp",
                "https://mdbcdn.b-cdn.net/img/new/slides/012.webp",
                "https://mdbcdn.b-cdn.net/img/new/slides/013.webp",
                "https://picsum.photos/200/300",
            ]
        ];

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
