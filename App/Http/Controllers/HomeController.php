<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {  
        
        return view('/home', [
            "title" => "Home",
            "active" => 'home',
            "posts" => Post::all()
        ]);  

    }
}
