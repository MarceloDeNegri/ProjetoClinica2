<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvenioRequest extends FormRequest
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
            'numero' => 'required',
            'plano' => 'required',
            'valor' => 'required',
        ];
    }
        public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório!',
            'numero.required'  => 'O campo numero é obrigatório!',
            'plano.required'  => 'O campo plano é obrigatório!',
            'valor.required'  => 'O campo valor é obrigatório!',
        ];
    }
}
