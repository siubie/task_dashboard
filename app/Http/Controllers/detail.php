<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detail extends Controller
{
    public function index()
    {
        $tittle ="Ini Judul Hero Post dari controller";
        $desc = "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.";
        $url = url('/news/hero-post-detail');
        return view('welcome', compact('tittle' , 'desc' , 'url'));
    }

    public function show()
    {
        $tittle ="Ini Judul Hero Post dari controller";
        $desc = "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.";
        $url = url('/news/hero-post-detail');
        return view('welcome', compact('tittle', 'desc', 'url'));
    }

    public function featured($id){
        $tittle = $id == 1 ? 'Ini judul featured post 1' : 'Ini judul featured post 2';
        $desc = $id == 1 ? 'ini content featured post 1 dari controller' : 'ini content featured post 2 dari controller';
        $url = url('/news/featured/' . $id);
        return view('welcome', compact('tittle' , 'desc' , 'url'));
    }
}
