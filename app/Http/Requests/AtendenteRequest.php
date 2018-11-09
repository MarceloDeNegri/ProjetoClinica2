<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtendenteRequest extends FormRequest
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
            'dtAdmissao' => 'required',
            'cracha' => 'required',
            'user_id' => 'required',
        ];
    }
        public function messages()
    {
        return [
            'dtAdmissao.required' => 'O campo data de Admissão é obrigatório!',
            'cracha.required'  => 'O campo número do cracha é obrigatório!',
            'user_id.required'  => 'O campo usuario é obrigatório!',
        ];
    }
}


