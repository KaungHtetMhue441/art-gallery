<?php

namespace App\Http\Controllers\Client;

use App\ArtGallery\Exhibitions\Repositories\ExhibitionRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExhibitionPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ExhibitionRepository $exhibitionRepository
    ) {
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function index(
        Request $request
    ) {
        $exhibitions = $this->exhibitionRepository->get(10);
        // dd($exhibitions);
        return view('pages.client.exhibitions.index', [
            "exhibitions" => $exhibitions
        ]);
    }
}
