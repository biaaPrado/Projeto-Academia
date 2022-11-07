<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
Use Illuminate\Support\Carbon;
use Tests\TestCase;
use App\Models\Cadastro;

class CadastroTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cadastro()
    {
       $mytime = Carbon::now();

       $this->post('/salvaCadastro', [
           'name'=> 'Testee',
           'dataNasc'=> $mytime,
           'email'=> 'teste@teste.br',
       ]);

       $this->assertEquals(Cadastro::find(1)->email,"teste@teste.br");
    }
}
