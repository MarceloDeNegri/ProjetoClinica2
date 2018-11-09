<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            'user_id' => 'required',
            'crm' => 'required',
            'especializacao_id' => 'required',
        ];
    }
        public function messages()
    {
        return [
            'user_id.required' => 'O campo usuario é obrigatório!',
            'crm.required'  => 'O campo crm é obrigatório!',
            'especializacao_id.required'  => 'O campo especializacao é obrigatório!',
        ];
    }
}
