<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\ImageSlider\Repositories\interfaces\ImageSliderRepositoryInterface;
use App\ArtGallery\ImageSlider\Requests\ImageSliderCreateRequest;
use App\ArtGallery\ImageSlider\Requests\ImageSliderUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ImageSliderController extends Controller
{
    public $viewPath = 'pages.admin.image-slider.';
    public $route = 'admin.image-slider.';
    public $datas = ['route' => 'admin.image-slider.'];

    /**
     * Create a new controller instance.
     * @param ImageSliderRepositoryInterface $imageSliderRepository
     */

    public function __construct(
        private ImageSliderRepositoryInterface $imageSliderRepository
    ) {
        //
    }

    public function index()
    {
        $this->datas['images'] = $this->imageSliderRepository->getAll();

        return view($this->viewPath . 'index', $this->datas);
    }

    public function create()
    {
        return view($this->viewPath . 'create', $this->datas);
    }

    public function store(
        ImageSliderCreateRequest $request
    )
    {
        try {
            $validated = $request->validated();
            $fileName = $this->getFileName($request->file('image'));
            $validated['name'] = $fileName['original_name'];
            $validated['image_url'] = '/storage/image-slider/' . $fileName['url'];

            Storage::disk('public')->put('/image-slider/' . $fileName['url'], $request->file('image')->getContent());
            $this->imageSliderRepository->createImageSlider($validated);
            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when creating new image!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function edit(
        $id
    )
    {
        $this->datas['image'] = $this->imageSliderRepository->getImageById($id);
        
        return view($this->viewPath . 'edit', $this->datas);
    }

    public function update(
        ImageSliderUpdateRequest $request,
        $id
    )
    {
        try {
            $validated = $request->all();

            if($request->hasFile('image')) {
                $fileName = $this->getFileName($request->file('image'));
                $validated['name'] = $fileName['original_name'];
                $validated['image_url'] = '/storage/image-slider/' . $fileName['url'];
    
                Storage::disk('public')->put('/image-slider/' . $fileName['url'], $request->file('image')->getContent());
            }

            $this->imageSliderRepository->updateImageSlider($id, $validated);
            return redirect()->route($this->route . 'index');
        } catch (Throwable  $e) {
            $message = "Fail something when creating new image!";
            return redirect()->back()->with('error', $this->getErrorMessage($e, $message));
        }
    }

    public function destroy(
        $id
    ) {
        try {
            $this->imageSliderRepository->deleteImageSlider($id);
            return redirect()->route($this->route . 'index');
        } catch (\Throwable $th) {
            $message = "Fail something when deleting image!";
            return redirect()->back()->with('error', $this->getErrorMessage($th, $message));
        }
    }

    public function getFileName($file)
    {
        $originalName = $file->getClientOriginalName();
        $originalExt = $file->getClientOriginalExtension();
        return [
            'url' => str_replace('.' . $originalExt, '_', $originalName) . Str::uuid() . '.' . $originalExt,
            'original_name' => $originalName
        ];
    }

    public function getErrorMessage($e, $message)
    {
        return env('APP_ENV') == "local" ? $e->getMessage() : $message;
    }
}