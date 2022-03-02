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
    public function show()
    {
        $tittle ="Ini Judul Hero Post dari controller";
        $desc = "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.";
        $url = url('/news/hero-post-detail');
        return view('welcome', compact('tittle', 'desc', 'url'));
    }
    public function featured($id){


        if($id == 1){
            $tittle = "Ini judul featured post 1";
            $desc = "ini content featured post 1 dari controller";
        }else if($id == 2){
            $tittle = "Ini judul featured post 2";
            $desc = "ini content featured post 2 dari controller";
        }
        $url = url('/news/featured/' . $id);
        return view('welcome', compact('tittle' , 'desc' , 'url'));
    }
}