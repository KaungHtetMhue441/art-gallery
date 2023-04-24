<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\ArtWorkMedium\Repositories\interfaces\ArtWorkMediumRepositoryInterface;
use App\ArtGallery\ArtWorkMedium\Requests\ArtWorkMediumCreateRequest;
use App\ArtGallery\ArtWorkMedium\Requests\ArtWorkMediumUpdateRequest;
use App\ArtGallery\ArtWorks\Requests\ArtWorkUpdateRequest;
use App\Http\Controllers\Controller;
use Throwable;

class ArtWorkMediumController extends Controller
{
    public $viewPath = 'pages.admin.artwork-mediums.';
    public $route = 'admin.artwork-mediums.';
    public $datas = ['route' => 'admin.artwork-mediums.'];

    /**
     * Create a new controller instance.
     * @param ArtWorkMediumRepositoryInterface $artworkMediumRepo
     */

    public function __construct(
        private ArtWorkMediumRepositoryInterface $artworkMediumRepo
    ) {
        //
    }

    public function index()
    {
        $this->datas['artworkMediums'] = $this->artworkMediumRepo->getAll();

        return view($this->viewPath . 'index', $this->datas);
    }

    public function create()
    {
        return view($this->viewPath . 'create', $this->datas);
    }

    public function store(
        ArtWorkMediumCreateRequest $request
    )
    {
        try {
            $validated = $request->all();

            $this->artworkMediumRepo->createArtWorkMedium($validated);

            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when creating artwork medium!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function edit(
        $id
    )
    {
        $this->datas['artworkMedium'] = $this->artworkMediumRepo->getArtWorkMediumById($id);
        
        return view($this->viewPath . 'edit', $this->datas);
    }

    public function update(
        ArtWorkMediumUpdateRequest $request,
        $id
    )
    {
        try {
            $validated = $request->all();

            $this->artworkMediumRepo->updateArtWorkMedium($id, $validated);
            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when updating artwork medium!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function destroy(
        $id
    ) {
        try {
            $this->artworkMediumRepo->deleteArtWorkMedium($id);
            return redirect()->route($this->route . 'index');
        } catch (\Throwable $th) {
            $message = "Fail something when deleting artwork medium!";
            return redirect()->back()->with('error', $this->getErrorMessage($th, $message));
        }
    }

    public function getErrorMessage($e, $message)
    {
        return env('APP_ENV') == "local" ? $e->getMessage() : $message;
    }
}
