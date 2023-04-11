<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\ArtGallery\Blogs\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\ArtGallery\BlogCategories\BlogCategory;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;

class BlogController extends Controller
{   
    public $viewPath = 'pages.admin.blogs.';
    public $route = 'admin.blog.';
    public $data = array();

    public function __construct(
        private BlogRepositoryInterface $blogsRepository
    )
    {
        $this->blogsRepository = $blogsRepository;
    }

    public function index(){
        $this->datas['blogs'] = $this->blogsRepository->getAll();
        return view($this->viewPath.'index',$this->datas);
    }
    public function create(){
        $this->datas['blogCategories'] = BlogCategory::all();
        return view($this->viewPath.'create',$this->datas);
    }
    public function store(BlogCreateRequest $request)
    {
        try{
          
            $validated = $request->validated();
            //dd($validated);
            $validated['cover_photo'] = $this->uploadCoverPhoto($request->file('cover_photo'));
            //$validated['images'] = $this->uploadImages($request);
            //dd($validated);
            $this->blogsRepository->store($validated);

        }catch (Throwable  $e)
        {
            $message = "Fail something when creating new user!";
            return redirect()->back()->withInput()->with('error',$this->getErrorMessage($e,$message));
        }

        return redirect()->route($this->route.'index')->with('success','Successfully created!');
    }

    public function edit(Blog $blog)
    {
        $this->datas['blog'] = $blog;
        $this->datas['blogCategories'] = BlogCategory::all();
        return view($this->viewPath.'edit',$this->datas);
    }

    public function update(Blog $blog, BlogUpdateRequest $request)
    {
        try{
            $validated = $request->validated();

            if($request->hasFile('cover_photo')){
                $this->deleteSingleFile($blog->cover_photo);
                $validated['cover_photo'] = $this->uploadCoverPhoto($request->file('cover_photo'));
            }
    
            if($request->hasFile('images')){
                $this->deleteFiles(collect(json_decode($blog->images))->pluck('name'));
                $validated['images'] = $this->uploadImages($request);
            }
            
            $blog->update($validated);

        }catch(Throwable $e){
            $message = "Fail something when updating blog!";
            return redirect()->back()->withInput()->with('error',$this->getErrorMessage($e,$message));
        }

        return redirect()->route($this->route.'index')->with('success','Successfully updated!');
    }
    public function delete(Blog $blog)
    {
        try{
            if(Storage::disk('public')->exists('/blogs/'.$blog->cover_photo)){
                Storage::disk('public')->delete('/blogs/'.$blog->cover_photo);
            }
            $blog->delete();
            return redirect()->back()->with('success','Successfully deleted!');
        }catch(Throwable $e)
        {
            $message = "Fail something when deleting blog!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }
    }
    public function uploadCoverPhoto($file)
    {
        $fileName = $this->getFileName($file);
        Storage::disk('public')->put('/blogs/'.$fileName,$file->getContent());
        return $fileName;
    }
    public function uploadImages($request)
    {
        $images = [];
        if($images){
            foreach($request->file('images') as $image)
        {
            $fileName = $this->getFileName($image);
            Storage::disk('public')->put('/blogs/'.$fileName,$image->getContent());
            array_push($images,['original_name'=>$image->getClientOriginalName(),"name"=>$fileName]);
        }
        }
        
        return $images;
    }
    
    public function getFileName($file)
    {
        $originalName = $file->getClientOriginalName();
        $originalExt = $file->getClientOriginalExtension();
        return str_replace('.'.$originalExt,'_',$originalName).Str::uuid().'.'.$originalExt;
    }
    public function deleteSingleFile($name)
    {
        if(Storage::disk('public')->exists('/blogs/'.$name))
            {
                Storage::disk('public')->delete('/blogs/'.$name);
            }
    }
}
