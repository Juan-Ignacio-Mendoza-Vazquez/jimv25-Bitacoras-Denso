<?php

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