<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvaliacaoRequest extends FormRequest
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
            'atendente' => 'required',
            'medico' => 'required',
            'observacao' => 'required',

        ];
    }
        public function messages()
    {
        return [
            'atendente.required' => 'O campo atendimento é obrigatório!',
            'medico.required'  => 'O campo atendimento medico é obrigatório!',
            'observacao.required'  => 'O campo  observação é obrigatório!',

        ];
    }
}
