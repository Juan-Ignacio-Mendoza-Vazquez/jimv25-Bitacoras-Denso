<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitaRequest;
use App\Models\Visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function index()
    {
        $visitas = Visita::select('id', 'name', 'company', 'hour')->paginate(10);
        return view('visitas.index', compact('visitas'));
    }

    public function create()
    {
        return view('visitas.registrar');
    }
    public function store(StoreVisitaRequest $request)
    {
        // 1. Obtener los datos validados
        $data = $request->validated();

        // 2. Guardar la foto en storage/app/public/fotos
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('fotos', 'public');
        }

        // 3. Crear el registro en la base de datos
        Visita::create($data);

        return back()->with('success', 'Visita registrada correctamente.');
        return view('visitas.index', compact('visitas'));
    }
    public function show(Visita $visita)
    {
        return view('visitas.show', compact('visita'));
    }
}
