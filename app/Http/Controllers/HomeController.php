<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function show_post(){
        $posts = Post::latest()->paginate(5);
        return view('welcome', ['posts'=>$posts]);
    }
}
