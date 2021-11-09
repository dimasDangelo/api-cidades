<?php

namespace App\Http\Requests;

use App\Rules\idEnderecoRule;
use Illuminate\Foundation\Http\FormRequest;

class deleteEnderecoRequest extends FormRequest
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
            "id" =>  ['required','numeric',new idEnderecoRule],
        ];
    }
    public function messages()
    {
        return[
            'id.required' => 'Informe o campo id',
            'id.numeric' => 'id campo apenas numeros',
        ];
    }
}
