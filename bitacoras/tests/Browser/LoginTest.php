<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function test_el_usuario_puede_iniciar_sesion()
    {
        // Crear usuario de prueba
        /*User::create([
            'name' => 'Ignacio Mendoza',
            'email' => 'ignacio@denso.com',
            'password' => Hash::make('password123'),
        ]);*/

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Iniciar Sesión')
                ->type('email', 'juan@denso.com')
                ->type('password', 'admin123')
                ->press('Entrar')
                ->assertPathIs('/denso');
        });
    }
}
