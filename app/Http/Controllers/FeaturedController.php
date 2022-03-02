<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function featured($id){

        $data = [
            'newsTitle' => 'Ini judul featured post '.$id,
            'newsDecsription' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
            'featuredPost1' => 'Ini judul featured post 1',
            'featuredPost2' => 'Ini judul featured post 2',
            'content1' => 'ini content featured post 1 dari controller',
            'content2' => 'ini content featured post 2 dari controller'
        ];

        return view('welcome',$data);

      
    }
}
