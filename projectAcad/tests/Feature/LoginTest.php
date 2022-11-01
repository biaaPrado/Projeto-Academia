<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_executing_login()
    {
        $login = new User;
        $login->email = "bia@unesp.br";
        $login->senha = Hash::make("pass");
    }
}
