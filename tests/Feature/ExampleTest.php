<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRootGetRequest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    // public function testTitle()
    // {
    //     $response = $this->get('/');
    //     $response = assertTitle('Laravel');
    // }

    // public function test_a_welcome()
    // {
    //     $view = $this->view('welcome', ['name' => 'Taylor']);
        
    //     $view->assertSee('Taylor');
    // }
}
