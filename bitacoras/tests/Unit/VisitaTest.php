<?php

namespace Tests\Unit;

use App\Models\Visita;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VisitaTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function registro_exitoso(){
        $visita = Visita::create([
            'name' => 'Jose Armando Perez Perez',
            'company' => 'Denso',
            'reason' => 'Entrega',
            'hour' => '10:00',
            'photo' => 'imagen.png',
        ]);
        $this->assertDatabaseHas('visitas', [
            'name' => 'Jose Armando Perez Perez',
        ]);
    } 
    /** @test */
    public function registro_falla(){
        $this->expectException(\Illuminate\Database\QueryException::class);

        Visita::create([
            'comány' => 'Denso',
            'reason' => 'Reunion',
            'hour' => '10:00',
            'photo' => 'imagen.png',
        ]);
    }
}
