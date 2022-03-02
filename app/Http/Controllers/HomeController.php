<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        return view('home', [
            'hero_news_title' => 'Ini Judul Hero Post dari controller',
            'hero_news_desc' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
            'featured_title_1' => 'Ini judul featured post 1',
            'featured_title_2' => 'Ini judul featured post 2',
            'featured_content_1' => 'ini content featured post 1 dari controller',
            'featured_content_2' => 'ini content featured post 2 dari controller'
        ]);
    }
}
