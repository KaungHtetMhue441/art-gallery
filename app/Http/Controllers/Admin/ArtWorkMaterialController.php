<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\ArtWorkMaterial\Repositories\interfaces\ArtWorkMaterialRepositoryInterface;
use App\ArtGallery\ArtWorkMaterial\Requests\ArtWorkMaterialCreateRequest;
use App\ArtGallery\ArtWorkMaterial\Requests\ArtWorkMaterialUpdateRequest;
use App\Http\Controllers\Controller;
use Throwable;

class ArtWorkMaterialController extends Controller
{
    public $viewPath = 'pages.admin.artwork-materials.';
    public $route = 'admin.artwork-materials.';
    public $datas = ['route' => 'admin.artwork-materials.'];

    /**
     * Create a new controller instance.
     * @param ArtWorkMaterialRepositoryInterface $artworkMaterialRepo
     */

    public function __construct(
        private ArtWorkMaterialRepositoryInterface $artworkMaterialRepo
    ) {
        //
    }

    public function index()
    {
        $this->datas['artworkMaterials'] = $this->artworkMaterialRepo->getAll();

        return view($this->viewPath . 'index', $this->datas);
    }

    public function create()
    {
        return view($this->viewPath . 'create', $this->datas);
    }

    public function store(
        ArtWorkMaterialCreateRequest $request
    )
    {
        try {
            $validated = $request->all();

            $this->artworkMaterialRepo->createArtWorkMaterial($validated);

            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when creating material category!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function edit(
        $id
    )
    {
        $this->datas['artworkMaterial'] = $this->artworkMaterialRepo->getArtWorkMaterialById($id);
        
        return view($this->viewPath . 'edit', $this->datas);
    }

    public function update(
        ArtWorkMaterialUpdateRequest $request,
        $id
    )
    {
        try {
            $validated = $request->all();

            $this->artworkMaterialRepo->updateArtWorkMaterial($id, $validated);
            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when updating material category!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function destroy(
        $id
    ) {
        try {
            $this->artworkMaterialRepo->deleteArtWorkMaterial($id);
            return redirect()->route($this->route . 'index');
        } catch (\Throwable $th) {
            $message = "Fail something when deleting materail category!";
            return redirect()->back()->with('error', $this->getErrorMessage($th, $message));
        }
    }

    public function getErrorMessage($e, $message)
    {
        return env('APP_ENV') == "local" ? $e->getMessage() : $message;
    }
}
