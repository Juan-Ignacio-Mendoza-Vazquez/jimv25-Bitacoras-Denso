<?php
use App\Http\Controllers\VisitaController;
use Illuminate\Support\Facades\Route;

Route::get('/administradores', function () {
    return view('administradores');
});

Route::get('/bitacoras', function(){
    return view('bitacoras');
});

Route::get('/denso', function(){
    return view('layouts.app');
});
/*Route::get('/registrar-visita', function(){
    return view('registrarvisita');
});*/
Route::get('/registro-visita',[VisitaController::class, 'create'])->name('visitas.create');
Route::post('/registro-visita', [VisitaController::class, 'store'])->name('visitas.store');