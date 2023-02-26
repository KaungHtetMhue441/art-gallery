<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{   
    public $viewPath = 'pages.admin.blogs.';
    public $route = 'admin.blog.';
    public $data = array();

    public function index(){
        return view($this->viewPath.'index',[
            
        ]);
    }
}
