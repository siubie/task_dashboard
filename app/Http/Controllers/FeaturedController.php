<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function feature($id) {
        if ($id == 1) {
            return view('news/featured/1', [
                'title' => 'Ini Judul Hero Post dari controller',
                'subtitle' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featured_title' => 'Ini judul featured post 1',
                'featured_desc' => 'ini content featured post 1 dari controller'
            ]);
        }
        elseif ($id == 2) {
            return view('news/featured/2', [
                'title' => 'Ini Judul Hero Post dari controller',
                'subtitle' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featured_title' => 'Ini judul featured post 2',
                'featured_desc' => 'ini content featured post 2 dari controller'
            ]);
        }
        else {
            return view('/');
        }
    }
}
