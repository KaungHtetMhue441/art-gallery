<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
    )
    {
        //
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
        $blogs = collect([
            (object) [
                'id' => 1,
                'title_en' => 'Blog 1',
                'description_en' => 'test description',
                'slug' => 'blog-1',
                'cover_photo' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp',
            ],
            (object) [
                'id' => 2,
                'title_en' => 'Blog 2',
                'description_en' => 'test description',
                'slug' => 'blog-2',
                'cover_photo' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp',
            ],
            (object) [
                'id' => 3,
                'title_en' => 'Blog 3',
                'description_en' => 'test description',
                'slug' => 'blog-3',
                'cover_photo' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp',
            ]            
        ]);

        return view('pages.client.blogs.index', [
            "blogs" => $blogs
        ]);
    }

    /**
     * @param Request $request
     * 
     * @return mixed
     */
    public function show(
        Request $request
    )
    {
        $blog = (object) [
            'id' => 3,
            'title_en' => 'Blog 3',
            'description_en' => 'test description',
            'slug' => 'blog-3',
            'cover_photo' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp',
        ];

        return view('pages.client.blogs.detail', [
            "blog" => $blog
        ]);
    }
}
