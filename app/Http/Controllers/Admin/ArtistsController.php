<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\Artists\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\ArtGallery\Artists\Requests\ArtistCreateRequest;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\ArtistTypes\ArtistType;
use App\ArtGallery\Regions\Region;

class ArtistsController extends Controller
{
    public $viewPath = 'pages.admin.artists.';
    public $route = 'admin.artists.';
    public $data = ['route' => 'admin.artists.'];
    /**
     * Create a new controller instance.
     * @param ArtistsRepositoryInterface $customerRepository
     */

    public function __construct(
        private ArtistsRepositoryInterface $artistsRepository
    )
    {
    }

    public function index()
    {
        $this->data['data'] = $this->artistsRepository->getAll();
        return view($this->viewPath.'index',$this->data);
    }

    public function create()
    {
        $this->data['regions'] = Region::all();
        $this->data['artistTypes'] = ArtistType::all();
        return view($this->viewPath.'create',$this->data);
    }

    public function store(ArtistCreateRequest $request) 
    {
        $this->artistsRepository->store($request->validated());
        return redirect()->route($this->route.'create');
    }

    public function update(ArtistCreateRequest $request,Artist $artist)
    {
        $artist->update($request->validated());
        return redirect()->route($this->route.'index');
    }
}
