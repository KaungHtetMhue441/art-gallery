<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\ArtistTypes\Requests\ArtistTypeCreateRequest;
use App\ArtGallery\ArtistTypes\Requests\ArtistTypeUpdateRequest;
use App\ArtGallery\ArtWorkCategories\Repositories\interfaces\ArtWorkCategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use Throwable;

class ArtWorkCategoryController extends Controller
{
    public $viewPath = 'pages.admin.artwork-categories.';
    public $route = 'admin.artwork-categories.';
    public $datas = ['route' => 'admin.artwork-categories.'];

    /**
     * Create a new controller instance.
     * @param ArtWorkCategoryRepositoryInterface $artworkCategoryRepo
     */

    public function __construct(
        private ArtWorkCategoryRepositoryInterface $artworkCategoryRepo
    ) {
        //
    }

    public function index()
    {
        $this->datas['artworkCategories'] = $this->artworkCategoryRepo->getAll();

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

            $this->artworkCategoryRepo->createArtWorkCategory($validated);

            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when creating artwork category!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function edit(
        $id
    )
    {
        $this->datas['artworkCategory'] = $this->artworkCategoryRepo->getArtWorkCategoryById($id);
        
        return view($this->viewPath . 'edit', $this->datas);
    }

    public function update(
        ArtistTypeUpdateRequest $request,
        $id
    )
    {
        try {
            $validated = $request->all();

            $this->artworkCategoryRepo->updateArtWorkCategory($id, $validated);
            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when updating artwork category!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function destroy(
        $id
    ) {
        try {
            $this->artworkCategoryRepo->deleteArtWorkCategory($id);
            return redirect()->route($this->route . 'index');
        } catch (\Throwable $th) {
            $message = "Fail something when deleting artwork category!";
            return redirect()->back()->with('error', $this->getErrorMessage($th, $message));
        }
    }

    public function getErrorMessage($e, $message)
    {
        return env('APP_ENV') == "local" ? $e->getMessage() : $message;
    }
}
