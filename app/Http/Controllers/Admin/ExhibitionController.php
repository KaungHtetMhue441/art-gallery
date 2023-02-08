<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArtGallery\Exhibitions\Requests\ExhibtionCreateRequest;
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
            return redirect()->route('admin.exhibition.index')->with('success', 'Exhibition Successfully Created');
        }catch(\Throwable $th){
            
        }
       
    }
}
