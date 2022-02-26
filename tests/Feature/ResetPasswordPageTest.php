<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResetPasswordPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/password/reset');
        $response->assertStatus(200);
        $response->assertSee('Login');
        $response->assertSee('Register');
        $response->assertSee('Email Address');
    }
}
