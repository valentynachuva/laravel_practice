<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Assert as PHPUnit;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListBookTest()
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

   public function testShowTest()
   {
      $response = $this->get('/book/');

       $response->assertStatus(200);
    }
    public function testCreateControllerTest()
{
    $response = $this->get('/book/');
    $response->assertViewIs('pages.create');
}
    public function testStoreControllerTest()
    {
        $response = $this->get('/book/');
        $response->assertViewHasAll(compact('book'));
    }
}
