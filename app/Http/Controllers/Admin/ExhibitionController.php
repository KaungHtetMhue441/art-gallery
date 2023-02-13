<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArtGallery\Exhibitions\Exhibition;

use App\ArtGallery\Exhibitions\Repositories\interfaces\ExhibitionsRepositoryInterface;

class ExhibitionController extends Controller
{
    public $viewPath = 'pages.admin.exhibitions.';
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
    public function store(Request $request)
    {
        try{
            $this->exhibitionRepository->store($request->all());
            return redirect()->route('admin.exhibitions.index')->with('success', 'Exhibition Successfully Created');
        }catch(\Throwable $th){
            dd($th->getMessage());
            return redirect()->back()->withErrors($th->getMessage());
        }
       
    }
    public function edit(Exhibition $exhibition)
    {
        return view($this->viewPath.'edit',[
            'exhibition'=>$exhibition
        ]);
    }
    public function update(Exhibition $exhibition,Request $request)
    {
        $exhibition->update($request->all());
        return redirect()->route('admin.exhibitions.index')->with('success', 'Exhibition Successfully Updated');
    }
    
    public function getFileName($file){
        $originalName = $file->getClientOriginalName();
        $originalExt = $file->getClientOriginalExtension();
        return str_replace('.'.$originalExt,'_',$originalName).Str::uuid().'.'.$originalExt;
    }
}
