<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'dtNascimento' => 'required',
            'status' => 'required',
            'tipoSanguineo' => 'required',
            'alergico' => 'required',
            'responsavel_id' => 'required',
        ];
    }
        public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório!',
            'dtNascimento.required'  => 'O campo data de Nascimento é obrigatório!',
            'tipoSanguineo.required'  => 'O campo tipo Sanguineo é obrigatório!',
            'alergico.required'  => 'O campo alergico é obrigatório!',
            'responsavel_id.required'  => 'O campo responsavel é obrigatório!',
        ];
    }
}

