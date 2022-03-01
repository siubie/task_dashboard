<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function featured($id){
        if($id == 1){
            return view('news.featured.1',[
                'Title' => 'Ini Judul Hero Post dari controller',
                'subTitle' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featured1' => 'Ini judul featured post 1',
                'content1' => 'Ini content featured post 1 dari controller'
            ]);
        }else if($id == 2){
            return view('news.featured.2',[
                'Title' => 'Ini Judul Hero Post dari controller',
                'subTitle' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featured2' => 'Ini judul featured post 2',
                'content2' => 'Ini content featured post 2 dari controller'
            ]);
        }else{
            return view('/');
        }
    }
}
