<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\ArtGallery\Artists\Artist;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\ArtWorks\ArtWork;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\ArtGallery\ArtWorkCategories\ArtWorkCategory;
use App\ArtGallery\ArtWorkCategories\Repositories\interfaces\ArtWorkCategoryRepositoryInterface;
use App\ArtGallery\ArtWorkMaterial\Repositories\interfaces\ArtWorkMaterialRepositoryInterface;
use App\ArtGallery\ArtWorkMedium\Repositories\interfaces\ArtWorkMediumRepositoryInterface;
use App\ArtGallery\ArtWorks\Requests\ArtWorkStoreRequest;
use App\ArtGallery\ArtWorks\Requests\ArtWorkUpdateRequest;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;

class ArtWorkController extends Controller
{
    protected $viewPath = 'pages.admin.artworks.';
    protected $route = 'admin.artwork.';
    protected $datas = ['route'=>'admin.artwork.'];

    /**
     * Create a new controller instance.
     * @param ArtistsRepositoryInterface $customerRepository
     */

    public function __construct(
        private ArtWorksRepositoryInterface $artWorksRepository,
        private ArtistsRepositoryInterface $artistRepo,
        private ArtWorkCategoryRepositoryInterface $artWorkCategoryRepo,
        private ArtWorkMaterialRepositoryInterface $artWorkMaterialRepo,
        private ArtWorkMediumRepositoryInterface $artWorkMediumRepo
    )
    {
        //
    }

    public function index()
    {
        $this->datas['artWorks'] = $this->artWorksRepository->getAll();
        return view($this->viewPath.'index',$this->datas);
    }

    public function create()
    {
        $this->datas['artists'] = $this->artistRepo->getAll();
        $this->datas['artWorkCategories'] = $this->artWorkCategoryRepo->getAll();
        $this->datas['artWorkMaterials'] = $this->artWorkMaterialRepo->getAll();
        $this->datas['artWorkMediums'] = $this->artWorkMediumRepo->getAll();

        return view($this->viewPath.'create',$this->datas);
    }

    public function store(ArtWorkStoreRequest $request)
    {
        try{
            $validated = $request->validated();

            $validated['cover_photo'] = $this->uploadCoverPhoto($request->file('cover_photo'));
            $validated['images'] = $this->uploadImages($request);
            $this->artWorksRepository->store($validated);

        }catch (Throwable  $e)
        {
            $message = "Fail something when creating new user!";
            return redirect()->back()->withInput()->with('error',$this->getErrorMessage($e,$message));
        }

        return redirect()->route($this->route.'index');
    }

    public function edit(ArtWork $artWork)
    {
        $this->datas['artists'] = $this->artistRepo->getAll();
        $this->datas['artWorkCategories'] = $this->artWorkCategoryRepo->getAll();
        $this->datas['artWorkMaterials'] = $this->artWorkMaterialRepo->getAll();
        $this->datas['artWorkMediums'] = $this->artWorkMediumRepo->getAll();
        $this->datas['artWork'] = $artWork;

        return view($this->viewPath.'edit',$this->datas);
    }

    public function update(ArtWorkUpdateRequest $request,ArtWork $artWork)
    {
        try{
            $validated = $request->validated();

            if($request->hasFile('cover_photo')){
                $this->deleteSingleFile($artWork->cover_photo);
                $validated['cover_photo'] = $this->uploadCoverPhoto($request->file('cover_photo'));
            }
    
            if($request->hasFile('images')){
                $this->deleteFiles(collect($artWork->images)->pluck('name'));
                $validated['images'] = $this->uploadImages($request);
            }
            
            $artWork->update($validated);

        }catch(Throwable $e){
            $message = "Fail something when updating new user!";
            return redirect()->back()->withInput()->with('error',$this->getErrorMessage($e,$message));
        }

        return redirect()->route($this->route.'index');
    }

    public function delete(ArtWork $artWork)
    {
        try{
            $this->deleteFiles(collect(json_decode($artWork->images))->pluck('name'));
            $artWork->delete();
        }catch(Throwable $e){
            $message = "Fail something when deleting ArtWork!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }
        
        return redirect()->back()->with('success','Successfully deleted!');
    }

    // Helper Function 
    public function deleteFiles($images)
    {
        foreach($images as $image)
        {
            $this->deleteSingleFile($image);
        }
    }

    public function deleteSingleFile($name)
    {
        if(Storage::disk('public')->exists('/artWorks/'.$name))
            {
                Storage::disk('public')->delete('/artWorks/'.$name);
            }
    }

    public function uploadCoverPhoto($file)
    {
        $fileName = $this->getFileName($file);
        Storage::disk('public')->put('/artWorks/'.$fileName,$file->getContent());
        return $fileName;
    }

    public function uploadImages($request)
    {
        $images = [];
        foreach($request->file('images') as $image)
        {
            $fileName = $this->getFileName($image);
            Storage::disk('public')->put('/artWorks/'.$fileName,$image->getContent());
            array_push($images,['original_name'=>$image->getClientOriginalName(),"name"=>$fileName]);
        }

        return $images;
    }
    
    public function getFileName($file)
    {
        $originalName = $file->getClientOriginalName();
        $originalExt = $file->getClientOriginalExtension();
        return str_replace('.'.$originalExt,'_',$originalName).Str::uuid().'.'.$originalExt;
    }

    public function getErrorMessage($e,$message){
        return env('APP_ENV') == "local" ? $e->getMessage():$message;
    }

}