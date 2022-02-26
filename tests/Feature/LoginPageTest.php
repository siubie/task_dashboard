<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_page_show_correctly()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Login');
        $response->assertSee('Register');
        $response->assertSee('Email Address');
        $response->assertSee('Password');
        $response->assertSee('Remember Me');
        $response->assertSee('Forgot Your Password');
    }
}
