<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('welcome', ['judul' => 'Ini Judul Hero Post dari controller', 'deskripsi' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.', 'post1' => ['id' => 1, 'judul' => 'Ini judul featured post 1', 'isi' => 'ini content featured post 1 dari controller'], 'post2' => ['id' => 2, 'judul' => 'Ini judul featured post 2', 'isi' => 'ini content featured post 2 dari controller']]);
    }
}
