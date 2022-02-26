<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SignupPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_signup_page_show_correctly()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('Login');
        $response->assertSee('Register');
        $response->assertSee('Name');
        $response->assertSee('Email Address');
        $response->assertSee('Password');
        $response->assertSee('Confirm Password');
    }
}
