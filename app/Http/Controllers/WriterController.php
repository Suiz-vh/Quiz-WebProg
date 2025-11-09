<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        // Tampilkan semua penulis
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }

    public function show($id)
    {
        // Tampilkan artikel yang ditulis oleh penulis tertentu
        $writer = Writer::with('posts')->findOrFail($id);
        return view('writer-detail', compact('writer'));
    }
}
