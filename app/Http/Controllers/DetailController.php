<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $tittle ="Ini Judul Hero Post dari controller";
        $desc = "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.";
        $url = url('/news/hero-post-detail');
        return view('welcome', compact('tittle' , 'desc' , 'url'));
    }
}
