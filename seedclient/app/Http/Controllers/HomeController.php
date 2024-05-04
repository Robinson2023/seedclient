<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        return view ('home', ['posts' => $posts]);
    }

    public function view ($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view ('view', ['post' => $post]);
    }
}
