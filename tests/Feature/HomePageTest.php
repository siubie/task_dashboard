<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_title_post_shown_correctly()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        //link login register
        $response->assertSee("Login");
        $response->assertSee("Register");
        //content header post
        $response->assertSee("Ini Judul Hero Post dari controller");
        $response->assertSee("Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.");
        //content featured post 2
        $response->assertSee("Ini judul featured post 1");
        $response->assertSee("ini content featured post 1 dari controller");
        //content featured post 2
        $response->assertSee("Ini judul featured post 2");
        $response->assertSee("ini content featured post 2 dari controller");
    }
    public function test_hero_post_detail_shown_correctly()
    {
        $response = $this->get('/news/hero-post-detail');

        $response->assertStatus(200);
        //link login register
        $response->assertSee("Ini Judul Hero Post dari controller");
        $response->assertSee("Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.");
    }

    public function test_featured_post1_detail_shown_correctly()
    {
        $response = $this->get('/news/featured/1');

        $response->assertStatus(200);
        //content featured post 2
        $response->assertSee("Ini judul featured post 1");
        $response->assertSee("ini content featured post 1 dari controller");
    }

    public function test_featured_post2_detail_shown_correctly()
    {
        $response = $this->get('/news/featured/2');

        $response->assertStatus(200);
        //content featured post 2
        $response->assertSee("Ini judul featured post 2");
        $response->assertSee("ini content featured post 2 dari controller");
    }
}
