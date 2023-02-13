<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistPageController extends Controller
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
        $req = $request->all();

        if (isset($req['artist_type'])) {
            $title = $req['artist_type'] . " Artists";
        } else if (isset($req['region'])) {
            $title = "Artists in " . $req['region'];
        } else {
            $title = "Our Artists";
        }

        $artists = collect([
            (object) [
                'id' => 1,
                'name' => 'Artist 1',
                'profile_image' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp'
            ],
            (object) [
                'id' => 2,
                'name' => 'Artist 2',
                'profile_image' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp'
            ],
            (object) [
                'id' => 3,
                'name' => 'Artist 3',
                'profile_image' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp'
            ],
        ]);

        return view('pages.client.artists.index', [
            'artists' => $artists,
            'title' => $title
        ]);
    }

    /**
     * @param Request $request
     * @param int $id
     * 
     * @return mixed
     */
    public function show(
        Request $request,
        $id
    )
    {
        $artist = (object) [
            'id' => 3,
            'name' => 'Artist 3',
            'profile_image' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp',
            'social_url' => 'www.facebook.com',
            'artistType' => (object) [
                'name' => 'type artist'
            ],
            'region' => (object) [
                'name' => 'artist region'
            ],
            'artWorks' => [
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
            ] 
        ];

        return view('pages.client.artists.detail', [
            'artist' => $artist
        ]);
    }
}
