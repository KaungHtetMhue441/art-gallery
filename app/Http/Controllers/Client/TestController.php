<?php

namespace App\Http\Controllers\Client;

use App\ArtGallery\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(
        private UserRepositoryInterface $userRepository
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
