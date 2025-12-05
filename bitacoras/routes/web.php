<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/administradores', function () {
    return view('administradores');
});

/*Route::get('/bitacoras', function(){
    return view('bitacoras');
});*/

Route::get('/denso', function(){
    return view('layouts.app');
});

Route::get('/registro-visita',[VisitaController::class, 'create'])->name('visitas.create');
Route::get('/visitas',[VisitaController::class, 'index'])->name('visitas.index');
Route::post('/visitas', [VisitaController::class, 'store'])->name('visitas.store');
Route::get('/visitas/{visita}', [VisitaController::class, 'show'])->name('visitas.show');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/registro-usuario', [LoginController::class, 'showRegister'])->name('register');
Route::post('/registro-usuario', [LoginController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registro-bitacora', [BitacoraController::class, 'create'])->name('bitacoras.create');
Route::post('/registro-bitacora', [BitacoraController::class, 'store'])->name('bitacoras.store');
Route::get('/bitacoras',[BitacoraController::class, 'index'])->name('bitacoras.index');
Route::get('/bitacoras/{id}', [BitacoraController::class, 'show'])->name('bitacoras.show');