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
Route::get('/visitas',[VisitaController::class, 'index'])->name('visitas.index');
Route::post('/visitas', [VisitaController::class, 'store'])->name('visitas.store');
Route::get('/visitas/{visita}', [VisitaController::class, 'show'])->name('visitas.show');
