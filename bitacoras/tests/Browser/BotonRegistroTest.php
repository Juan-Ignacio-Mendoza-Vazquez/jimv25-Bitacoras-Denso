<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BotonRegistroTest extends DuskTestCase
{
    /** @test */
    public function el_boton_de_registro_existe_y_funciona()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/bitacoras')
                ->assertSee('Registrar') // Debe coincidir con tu botón en index

                ->click('@btn-registrar') // Usa dusk selector
                ->assertPathIs('/registro-bitacora');
        });
    }
}
