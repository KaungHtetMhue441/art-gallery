<?php

namespace App\Http\Controllers\Client;

use App\ArtGallery\ArtWorks\ArtWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;
use App\ArtGallery\Exhibitions\Repositories\ExhibitionRepository;
use App\ArtGallery\ImageSlider\Repositories\interfaces\ImageSliderRepositoryInterface;

class HomePageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private ImageSliderRepositoryInterface $imageSliderRepository,
        private ArtWorksRepositoryInterface $artWorkRepo,
        private BlogRepositoryInterface $blogRepo,
        private ExhibitionRepository $exhibitionRepo,
    ) {
        //
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function index(
        Request $request
    ) {
        return view('pages.client.index', [
            'blogs' => $this->blogRepo->getAll(),
            'images' => $this->imageSliderRepository->getAll(),
            'artworks' => $this->artWorkRepo->getLatest(5),
            'exhibitions'=>$this->exhibitionRepo->get(5,['exhibition_date'])
        ]);
    }

    public function search(Request $request)
    {
        $artWorks = $this->artWorkRepo->getByTitle(explode(' ', $request->title));
        $datas = [];
        foreach ($artWorks as $artwork) {
            $data['id'] = $artwork->id;
            $data['title'] = $artwork->title;
            $data['artist'] = $artwork->artist->name;
            $data['category'] = $artwork->category->name;
            $data['image']  = $artwork->coverPhotoUrl;
            array_push($datas, $data);
        }
        $datas = collect($datas);
        return response()->json([
            "data" => $datas
        ]);
    }
}