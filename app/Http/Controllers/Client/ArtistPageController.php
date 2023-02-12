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
                    'title' => 'art work title',
                    'cover_photo' => "https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp"
                ],
                (object) [
                    'title' => 'art work title 2',
                    'cover_photo' => "https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp"
                ],
            ] 
        ];

        return view('pages.client.artists.detail', [
            'artist' => $artist
        ]);
    }
}
