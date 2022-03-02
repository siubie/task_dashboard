<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedController extends Controller {
    public function featured($id) {
        if ($id == 1) {
            return view('news/featured/1', [
                'hero_news_title' => 'Ini Judul Hero Post dari controller',
                'hero_news_desc' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featured_title_1' => 'Ini judul featured post 1',
                'featured_content_1' => 'ini content featured post 1 dari controller'
            ]);
        } else {
            return view('news/featured/2', [
                'hero_news_title' => 'Ini Judul Hero Post dari controller',
                'hero_news_desc' => 'Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.',
                'featured_title_2' => 'Ini judul featured post 2',
                'featured_content_2' => 'ini content featured post 2 dari controller'
            ]);
        }
    }
}
