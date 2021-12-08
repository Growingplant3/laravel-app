<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{

    /** @test */
    public function 認証機能でアカウントが作成できること()
    {
        $response = $this->get(route('register'));
        $response->assertViewIs('auth.register');
        $this->assertGuest($guard = null);
        // $response->dumpHeaders();
        // $response->dumpSession();
        // $response->dump();
    }
}
