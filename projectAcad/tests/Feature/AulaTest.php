<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
Use Illuminate\Support\Carbon;
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
        $mytime = Carbon::now();

        $response = $this->post('/createAula', [
            'tipo'=> 'Musculação',
            'dataAula'=> $mytime,
            'contact'=> '14 990999999'
        ]);

        $this->assertEquals(Aula::find(1)->tipo, "Musculação");
    }
}
