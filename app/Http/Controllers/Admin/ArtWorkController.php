<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtWorkController extends Controller
{
    protected $viewPath = 'pages.admin.artworks.';
    protected $data = [];

    public function __construct()
    {
        
    }

    public function index(){
        return view($this->viewPath.'index',$this->data);
    }

}
