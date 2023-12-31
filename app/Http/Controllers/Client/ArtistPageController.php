<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\ArtGallery\Artists\Artist;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\ArtistTypes\Repositories\ArtistTypeRepository;
use App\Http\Controllers\Controller;

class ArtistPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ArtistsRepositoryInterface $artistRepository,
        private ArtistTypeRepository $artistTypeRepository
    )
    {
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
        

        return view('pages.client.artists.index', [
            'artists' => $this->artistRepository->getAll(12),
            'types'=>$this->artistTypeRepository->getAll(),
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
        Artist $artist
    )
    {
        return view('pages.client.artists.detail', [
            'artist' => $artist
        ]);
    }
}