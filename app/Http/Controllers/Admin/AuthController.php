<?php

namespace App\Http\Controllers\Admin;

use App\ArtGallery\Auth\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        //
    }

    public function login()
    {
        return view('pages.admin.login');
    }

    public function store(
        LoginRequest $request
    )
    {
        if(auth()->attempt($request->only(['email', 'password']))){
            return redirect('/admin');
        }else{
            return redirect()->back()->withErrors([
                "unauth" => "Wroung User Credentials."
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
