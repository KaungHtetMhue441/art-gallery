<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\ArtistTypes\Repositories\interfaces\ArtistTypeRepositoryInterface;
use App\ArtGallery\ArtistTypes\Requests\ArtistTypeCreateRequest;
use App\ArtGallery\ArtistTypes\Requests\ArtistTypeUpdateRequest;
use App\Http\Controllers\Controller;
use Throwable;

class ArtistTypeController extends Controller
{
    public $viewPath = 'pages.admin.artist-types.';
    public $route = 'admin.artist-types.';
    public $datas = ['route' => 'admin.artist-types.'];

    /**
     * Create a new controller instance.
     * @param ArtistTypeRepositoryInterface $artistTypeRepo
     */

    public function __construct(
        private ArtistTypeRepositoryInterface $artistTypeRepo
    ) {
        //
    }

    public function index()
    {
        $this->datas['artistTypes'] = $this->artistTypeRepo->getAll();

        return view($this->viewPath . 'index', $this->datas);
    }

    public function create()
    {
        return view($this->viewPath . 'create', $this->datas);
    }

    public function store(
        ArtistTypeCreateRequest $request
    )
    {
        try {
            $validated = $request->all();

            $this->artistTypeRepo->createArtistType($validated);

            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when creating artist type!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function edit(
        $id
    )
    {
        $this->datas['artistType'] = $this->artistTypeRepo->getArtistTypeById($id);
        
        return view($this->viewPath . 'edit', $this->datas);
    }

    public function update(
        ArtistTypeUpdateRequest $request,
        $id
    )
    {
        try {
            $validated = $request->all();

            $this->artistTypeRepo->updateArtistType($id, $validated);
            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when updating artist type!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function destroy(
        $id
    ) {
        try {
            $this->artistTypeRepo->deleteArtistType($id);
            return redirect()->route($this->route . 'index');
        } catch (\Throwable $th) {
            $message = "Fail something when deleting artist type!";
            return redirect()->back()->with('error', $this->getErrorMessage($th, $message));
        }
    }

    public function getErrorMessage($e, $message)
    {
        return env('APP_ENV') == "local" ? $e->getMessage() : $message;
    }
}
