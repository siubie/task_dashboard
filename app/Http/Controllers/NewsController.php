<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function detail()
    {
        return view('detail', ['judul' => 'Ini Judul Hero Post dari controller', 'deskripsi' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.']);
    }

    public function featured($id)
    {
        return view('featured', ['judul' => 'Ini judul featured post ' . $id, 'isi' => 'ini content featured post ' . $id . ' dari controller']);
    }
}
