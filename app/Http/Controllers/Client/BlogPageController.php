<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\ArtGallery\Blogs\Blog;
use App\Http\Controllers\Controller;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;

class BlogPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        private BlogRepositoryInterface $blogsRepository
    )
    {
        $this->blogsRepository = $blogsRepository;
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function index(
        Request $request
    )
    {
        $blogs = Blog::paginate(8);

        return view('pages.client.blogs.index', [
            "blogs" => $blogs
        ]);
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function show($slug)
    {
        $blog = $this->blogsRepository->getBySlug($slug);
        $blogs =$this->blogsRepository->getByCategory($blog->blog_category_id);;
        return view('pages.client.blogs.detail', [
            "blog" => $blog,
            "blogs"=> $blogs
        ]);
    }
}