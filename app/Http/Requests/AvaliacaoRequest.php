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
            'nota' => 'required',
            'observacao' => 'required',
            'avaliacao_id' => 'required',
        ];
    }
        public function messages()
    {
        return [
            'nota.required' => 'O campo nota é obrigatório!',
            'observacao.required'  => 'O campo observação é obrigatório!',

        ];
    }
}
