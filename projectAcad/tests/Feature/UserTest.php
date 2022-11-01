<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_executing_cad()
    {
        //cadastrar usuário
        $this->post('/cadastrar_user', [
            'nome'=> 'Testando',
            'email'=> 'teste@gmail.com',
            'senha'=> 'senhaTeste'
        ]);

        //checar se cadastrou
        $this->assertEquals(User::find(1)->nome, "Testando");
    }
}
