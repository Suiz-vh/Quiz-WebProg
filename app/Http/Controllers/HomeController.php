<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->take(3)->get();
        return view('home', compact('posts'));
    }
}
