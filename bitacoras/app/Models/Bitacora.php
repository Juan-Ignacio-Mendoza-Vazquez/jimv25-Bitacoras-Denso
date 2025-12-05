<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $fillable = [
        'bitacora',
        'nombre_visitante',
        'compania',
        'contacto_denso',
        'grupo_fisico',
        'entrada',
        'salida',
        'detalle',
    ];
}
