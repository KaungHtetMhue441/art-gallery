<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public $viewPath = 'pages.admin.artists.';
    public $data = array();
    /**
     * Create a new controller instance.
     * @param ArtistsRepositoryInterface $customerRepository
     */

    public function __construct(
        private ArtistsRepositoryInterface $artistsRepository
    )
    {
    }
    public function index(){

        return view($this->viewPath.'index',$this->artistsRepository->getAll());
    }
}
