<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\ArtGallery\Exhibitions\Exhibition;
use App\ArtGallery\Exhibitions\Requests\ExhibtionCreateRequest;
use App\ArtGallery\Exhibitions\Requests\ExhibitionCreateRequest;
use App\ArtGallery\Exhibitions\Requests\ExhibitionUpdateRequest;
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
        $this->exhibitionRepository = $exhibitionRepository;
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

    public function update(ExhibitionUpdateRequest $request,Exhibition $exhibition)
    {
        try{
            $this->exhibitionRepository->store($request->all());
            return redirect()->route('admin.exhibition.index')->with('success', 'Exhibition Successfully Created');
        }catch(\Throwable $th){
            
            $exhibition->update($validated);
            return redirect()->route($this->route.'index')->with('success','Successfully updated!');

        }catch(Throwable $e)
        {
            $message = "Fail something when updating exhibition!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }

    }

    public function delete(Exhibition $exhibition)
    {
        try{
            if(Storage::disk('public')->exists('/exhibitions/'.$exhibition->cover_photo)){
                Storage::disk('public')->delete('/exhibitions/'.$exhibition->cover_photo);
            }
            $exhibition->delete();
            return redirect()->back()->with('success','Successfully deleted!');
        }catch(Throwable $e)
        {
            $message = "Fail something when deleting exhibition!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }
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
