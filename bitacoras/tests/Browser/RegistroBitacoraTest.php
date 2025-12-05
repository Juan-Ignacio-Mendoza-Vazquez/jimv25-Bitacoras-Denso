<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistroBitacoraTest extends DuskTestCase
{
    public function test_puede_registrar_una_bitacora()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/registro-bitacora')
                ->assertSee('Registro Bitácora')
                ->type('bitacora', 'BT-001')
                ->type('nombre_visitante', 'Juan Mendoza')
                ->type('compania', 'Ford')
                ->type('contacto_denso', 'Luis Pérez')
                ->type('grupo_fisico', 'A1')
                ->type('entrada', '04/12/2025')
                ->keys('#entrada', ['{tab}'])
                ->type('entrada', '0243p')
                ->type('salida',  '04/12/2025')
                ->keys('#salida', ['{tab}'])
                ->type('salida', '0258p')
                ->type('detalle', 'Prueba automática')
                ->press('Registrar')
                ->assertSee('Bitácora registrada correctamente.'); // O ajusta el mensaje real
        });
    }
}
