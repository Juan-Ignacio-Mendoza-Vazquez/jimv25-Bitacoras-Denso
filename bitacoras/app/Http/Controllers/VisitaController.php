<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitaRequest;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function create(){
        return view('visitas.registrar');
    }

    public function store(StoreVisitaRequest $request){
        
        return back()->with('success','Datos validados correctamente.');
    }
}
