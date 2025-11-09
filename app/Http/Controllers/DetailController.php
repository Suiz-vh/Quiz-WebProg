<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DetailController extends Controller
{
    public function show($id)
    {
        // Tampilkan detail artikel berdasarkan ID
        $post = Post::findOrFail($id);
        return view('detail', compact('post'));
    }
}
