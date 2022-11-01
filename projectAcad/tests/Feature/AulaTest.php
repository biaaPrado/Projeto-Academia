<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Aula;

class AulaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cad_aula()
    {
        $this->post('/verAulas', [
            'tipo'=> 'Musculação',
            'dataAula'=> '10/11/2022',
            'contato'=> '14 990999999'
        ]);

        $this->assertEquals(Aula::find(1)->tipo, "Musculação");
    }
}
