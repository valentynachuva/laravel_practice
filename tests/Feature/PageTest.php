<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAboutPage()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('About');
    }

    public function testContactPage()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Contact');
    }

    public function testProfilePage()
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('Profile');
    }
}
