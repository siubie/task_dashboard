<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Ini Judul Hero Post dari controller';
        $desc  = 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.';
        $url   = url('/news/hero-post-detail');
        return view('index', compact('title', 'desc', 'url'));
    }

    public function show()
    {
        $title = 'Ini Judul Hero Post dari controller';
        $desc  = 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.';
        $url   = url('/news/hero-post-detail');
        return view('index', compact('title', 'desc', 'url'));
    }

    public function featured(int $id)
    {
        $title = $id == 1 ? 'Ini judul featured post 1' : 'Ini judul featured post 2';
        $desc  = $id == 1 ? 'ini content featured post 1 dari controller' : 'ini content featured post 2 dari controller';
        $url   = url('/news/featured/' . $id);
        return view('index', compact('title', 'desc', 'url'));
    }
}
