<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCellRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo NOMBRE es obligatorio.',
            'username.required' => 'El campo USUARIO es obligatorio.',
            'password.required' => 'El campo CONTRASEÑA es obligatorio.',
        ];
    }
}

