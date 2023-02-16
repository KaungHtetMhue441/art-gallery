<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\ArtGallery\Exhibitions\Exhibition;
use App\ArtGallery\Exhibitions\Requests\ExhibtionCreateRequest;
use App\ArtGallery\Exhibitions\Requests\ExhibitionCreateRequest;
use App\ArtGallery\Exhibitions\Repositories\interfaces\ExhibitionsRepositoryInterface;

class ExhibitionController extends Controller
{
    public $viewPath = 'pages.admin.exhibitions.';
    public $route = 'admin.exhibition.';
    public $data = array();
    /**
     * Create a new controller instance.
     * @param ExhibitionsRepositoryInterface $exhibitionRepository
     */

    public function __construct(
        private ExhibitionsRepositoryInterface $exhibitionRepository
    )
    {
    }
    public function index(){

        return view($this->viewPath.'index',[
            "exhibitions" => $this->exhibitionRepository->getAll()
        ]);
    }

    public function create()
    {
        return view($this->viewPath.'create',$this->data);
    }

    public function store(ExhibitionCreateRequest $request)
    {
        try{
            $validated = $request->validated();
            $fileName = $this->getFileName($request->file('cover_photo'));
            $validated['cover_photo'] = $fileName;
            $this->exhibitionRepository->store($validated);
            Storage::disk('public')->put('/exhibitions/'.$fileName,$request->file('cover_photo')->getContent());
        }catch (Throwable  $e)
        {
            $message = "Fail something when creating new user!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }
        return redirect()->route($this->route.'index');
    }

    public function edit(Exhibition $exhibition){
        $this->datas['exhibition'] = $exhibition; 
        return view($this->viewPath.'edit',$this->datas);
    }

    public function update(Request $request,Exhibition $exhibition)
    {
        // dd($request->validated());
        // try{
        //     $validated = $request->validated();

        //     if($request->hasFile('profile_image'))
        //     {
        //         $fileName = $this->getFileName($request->file('profile_image'));
        //         $validated['profile_image'] = $fileName;
        //         if(Storage::disk('public')->exists('/artists/'.$artist->profile_image)){
        //             Storage::disk('public')->delete('/artists/'.$artist->profile_image);
        //         }
        //         Storage::disk('public')->put('/artists/'.$fileName,$request->file('profile_image')->getContent());
        //     }
            
        //     $artist->update($validated);
        //     return redirect()->route($this->route.'index')->with('success','Successfully updated!');

        // }catch(Throwable $e)
        // {
        //     $message = "Fail something when updating artist!";
        //     return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        // }


    }

    public function getFileName($file)
    {
        $originalName = $file->getClientOriginalName();
        $originalExt = $file->getClientOriginalExtension();
        return str_replace('.'.$originalExt,'_',$originalName).Str::uuid().'.'.$originalExt;
    }

    public function getErrorMessage($e,$message)
    {
        return env('APP_ENV') == "local" ? $e->getMessage():$message;
    }
}
