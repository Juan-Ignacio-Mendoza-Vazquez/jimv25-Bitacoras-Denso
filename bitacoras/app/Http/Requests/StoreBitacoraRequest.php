<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBitacoraRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Permitir la validación
    }

    public function rules(): array
    {
        return [
            'bitacora' => 'required|string|max:255',
            'nombre_visitante' => 'required|string|max:255',
            'compania' => 'required|string|max:255',
            'contacto_denso' => 'required|string|max:255',
            'grupo_fisico' => 'required|string|max:255',
            'entrada' => 'required',
            'salida' => 'nullable',
            'detalle' => 'nullable|string'
        ];
    }


    public function messages(): array
    {
        return [
            'bitacora.required'=> 'El campo es obligatorio.',
            'nombre_visitante.required' => 'El nombre del visitante es obligatorio.',
            'compania.required' => 'La compañía es obligatoria.',
            'contacto_denso.required' => 'El contacto en Denso es obligatorio.',
            'grupo_fisico.required' => 'El grupo físico es obligatorio.',
            'entrada.required' => 'La hora de entrada es obligatoria.',
        ];
    }
}
