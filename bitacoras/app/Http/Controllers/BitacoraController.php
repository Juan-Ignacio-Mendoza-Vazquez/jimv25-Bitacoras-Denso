<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBitacoraRequest;
use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index()
    {
        // Incluimos el campo 'bitacora' en la selección
        $bitacoras = Bitacora::select(
            'id',
            'bitacora',
            'nombre_visitante',
            'compania',
            'contacto_denso',
            'entrada',
            'salida',
            'detalle'
        )->paginate(10);

        return view('bitacoras.index', compact('bitacoras'));
    }

    public function create()
    {
        return view('bitacoras.create');
    }

    public function store(StoreBitacoraRequest $request)
    {
        // 1. Obtener datos validados (ahora incluye 'bitacora')
        $data = $request->validated();

        // 2. Crear el registro
        Bitacora::create($data);

        // 3. Mensaje de éxito
        return back()->with('success', 'Bitácora registrada correctamente.');
    }

    public function show(Bitacora $bitacora)
    {
        return view('bitacoras.show', compact('bitacora'));
    }
}
