<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        return view('welcome',[
            'Title' => 'Ini Judul Hero Post dari controller',
            'subTitle' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
            'featured1' => 'Ini judul featured post 1',
            'featured2' => 'Ini judul featured post 2',
            'content1' => 'ini content featured post 1 dari controller',
            'content2' => 'ini content featured post 2 dari controller'
        ]);
    }
}
