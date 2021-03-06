<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtendimentoRequest extends FormRequest
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
            'hora_inicio' => 'required',


        ];
    }
        public function messages()
    {
        return [
            'hora_inicio.required' => 'O campo inicio do horario é obrigatório!',
            'status.required'  => 'O campo status é obrigatório!',

        ];
    }
}
