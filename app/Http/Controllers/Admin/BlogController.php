<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArtGallery\BlogCategories\BlogCategory;
use App\ArtGallery\Blogs\Requests\BlogCreateRequest;
class BlogController extends Controller
{   
    public $viewPath = 'pages.admin.blogs.';
    public $route = 'admin.blog.';
    public $data = array();

    public function index(){
        return view($this->viewPath.'index',[
            
        ]);
    }
    public function create(){
        $this->datas['blogCategories'] = BlogCategory::all();
        return view($this->viewPath.'create',$this->datas);
    }
    public function store(BlogCreateRequest $request)
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

        return redirect()->route($this->route.'create');
    }
}
