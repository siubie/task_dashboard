<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function featured($id){
        if($id = 1){
            return view('news.featured.1',[
                'newsTitle' => 'Ini Judul Hero Post dari controller',
                'newsDecs' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featuredPost1' => 'Ini judul featured post 1',
                'featuredPost2' => 'Ini judul featured post 2',
                'content1' => 'ini content featured post 1 dari controller',
                'content2' => 'ini content featured post 2 dari controller'
            ]);
        }

        elseif($id = 2){
            return view('news.featured.2',[
                'newsTitle' => 'Ini Judul Hero Post dari controller',
                'newsDecs' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featuredPost1' => 'Ini judul featured post 1',
                'featuredPost2' => 'Ini judul featured post 2',
                'content1' => 'ini content featured post 1 dari controller',
                'content2' => 'ini content featured post 2 dari controller'
            ]);
        } else{
            return view('/');
        }
    }
}
