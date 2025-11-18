<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVisitaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'company' => 'required|min:3',
            'reason' => 'required|min:6|max:150',
            'hour' => 'required|date_format:H:i',
            'photo' => 'required|file|mimes:jpg,jpeg,png|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'company.required' => 'El nombre de la empresa es obligatorio',
            'company.min' => 'El nombre de la empresa debe tener al menos 3 caracteres',
            'reason.required' => 'La razon es requerida',
            'reason.min' => 'La razon debe tener al menos 6 caracteres',
            'hour.required' => 'Debes registrar la hora',
            'hour.date_format' => 'La hora debe estar en formato HH:MM con horas (00-23) y minutos (00-59).',
            'photo.required' => 'Debes subir una foto',
            'photo.file' => 'El archivo no es valido',
            'photo.mimes' => 'Solo se permiten archivos con extension .jpg, .jpeg o .png',
            'photo.max' => 'El archivo no puede ser mayor a 2MB',
        ];
    }
}
