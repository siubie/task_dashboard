<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroDetailController extends Controller
{
    public function detail()
    {
        $title = 'Ini Judul Hero Post dari controller';
        $desc = 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.';
        $url = url('/news/hero-post-detail');
        return view('index', compact('title', 'desc', 'url'));
    }

    public function featured($id)
    {
        $title = 'Ini judul featured post ' . $id;
        $desc = 'ini content featured post ' . $id . ' dari controller';
        $url = url('/news/featured/' . $id);
        return view('index', compact('title', 'desc', 'url'));
    }
}
