<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {
        return view('welcome', [
            'title' => 'Ini Judul Hero Post dari controller',
            'subtitle' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
            'featured_title_1' => 'Ini judul featured post 1',
            'featured_desc_1' => 'ini content featured post 1 dari controller',
            'featured_title_2' => 'Ini judul featured post 2',
            'featured_desc_2' => 'ini content featured post 2 dari controller'
        ]);
    }
}
