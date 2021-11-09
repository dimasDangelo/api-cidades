<?php

namespace App\Http\Requests;

use App\Rules\idCidadeRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateEnderecoRequest extends FormRequest
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
            "logradouro" => 'required',
            "numero" => 'required',
            "bairro" => 'required',
            "id_cidade" => ['required','numeric', new idCidadeRule],
        ];
    }
    public function messages()
    {
        return[
            'logradouro.required' => 'Informe o campo Logradouro!',
            'numero.required' => 'Informe o campo numero!',
            'bairro.required' => 'Informe o campo bairro',
            'id_cidade.required' => 'Informe o campo id_cidade!',
            'id_cidade.numeric' => 'id_cidade apenas numeros!',
        ];
    }
}
