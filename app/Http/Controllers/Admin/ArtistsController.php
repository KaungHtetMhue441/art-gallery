<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use Illuminate\Support\Str;
use App\ArtGallery\Artists\Artist;
use App\ArtGallery\Regions\Region;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\ArtGallery\ArtistTypes\ArtistType;
use App\ArtGallery\Artists\Requests\ArtistCreateRequest;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\Artists\Requests\ArtistUpdateRequest;

class ArtistsController extends Controller
{
    public $viewPath = 'pages.admin.artists.';
    public $route = 'admin.artists.';
    public $datas = ['route' => 'admin.artists.'];
    /**
     * Create a new controller instance.
     * @param ArtistsRepositoryInterface $customerRepository
     */

    public function __construct(
        private ArtistsRepositoryInterface $artistsRepository
    )
    {
    }

    public function index()
    {
        $this->datas['artists'] = $this->artistsRepository->getAll(10);
        return view($this->viewPath.'index',$this->datas);
    }

    public function create()
    {
        $this->datas['regions'] = Region::all();
        $this->datas['artistTypes'] = ArtistType::all();
        return view($this->viewPath.'create',$this->datas);
    }

    public function store(ArtistCreateRequest $request) 
    {
        try{
            $validated = $request->validated();
            $validated['social_url'] = explode(',',$validated['social_url']);
            $fileName = $this->getFileName($request->file('profile_image'));
            $validated['profile_image'] = $fileName;
            $this->artistsRepository->store($validated);
            Storage::disk('public')->put('/artists/'.$fileName,$request->file('profile_image')->getContent());
        }catch (Throwable  $e)
        {
            $message = "Fail something when creating new user!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }

        return redirect()->route($this->route.'index');
    }

    public function edit(Artist $artist){

        $this->datas['artist'] = $artist;
        $this->datas['regions'] = Region::all();
        $this->datas['artistTypes'] = ArtistType::all(); 
        return view($this->viewPath.'edit',$this->datas);
    }

    public function update(ArtistUpdateRequest $request,Artist $artist)
    {
        try{
            $validated = $request->validated();

            if($request->hasFile('profile_image'))
            {
                $fileName = $this->getFileName($request->file('profile_image'));
                $validated['profile_image'] = $fileName;
                if(Storage::disk('public')->exists('/artists/'.$artist->profile_image)){
                    Storage::disk('public')->delete('/artists/'.$artist->profile_image);
                }
                Storage::disk('public')->put('/artists/'.$fileName,$request->file('profile_image')->getContent());
            }
            $validated['social_url'] = explode(',',$validated['social_url']);
            $artist->update($validated);
            return redirect()->route($this->route.'index')->with('success','Successfully updated!');

        }catch(Throwable $e)
        {
            $message = "Fail something when updating artist!";
            return redirect()->back()->with('error',$this->getErrorMessage($e,$message));
        }


    }

    public function delete(Artist $artist)
    {
        try{
            if(Storage::disk('public')->exists('/artists/'.$artist->profile_image)){
                Storage::disk('public')->delete('/artists/'.$artist->profile_image);
            }
            $artist->delete();
            return redirect()->back()->with('success','Successfully deleted!');
        }catch(Throwable $e)
        {
            $message = "Fail something when deleting artist!";
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