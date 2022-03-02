<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $title = 'Ini Judul Hero Post dari controller';
        $desc = 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.';
        $url = url('/');
        return view('index', compact('title', 'desc', 'url'));
    }
}
