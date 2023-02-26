<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
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
        return view('pages.client.index', [
            "title" => "Test Title",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, facilis?",
            "url" => "www.google.com",
            "image" => "https://picsum.photos/200/300"
        ]);
    }
}
