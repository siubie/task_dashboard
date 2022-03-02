<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller {
    public function detail() {
        return view('news/hero-post-detail', [
            'hero_news_title' => 'Ini Judul Hero Post dari controller',
            'hero_news_desc' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.'
        ]);
    }
}
