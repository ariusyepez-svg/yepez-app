<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCellRequest extends FormRequest
{
    // Cambiar a true para habilitar la validación
    public function authorize(): bool
    {
        return true;
    }

    // 1. Reglas de validación aprendidas (Campos requeridos)
    public function rules(): array
    {
        return [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }

    // 2. Personalizar nombres de los atributos a mayúsculas
    public function attributes(): array
    {
        return [
            'name' => 'NOMBRE',
            'username' => 'USUARIO',
            'password' => 'CONTRASEÑA',
        ];
    }

    // 3. Mensajes específicos con el formato "es obligatorio" que corregimos antes
    public function messages(): array
    {
        return [
            'name.required' => 'El campo NOMBRE es obligatorio.',
            'username.required' => 'El campo USUARIO es obligatorio.',
            'password.required' => 'El campo CONTRASEÑA es obligatorio.',
        ];
    }
}
