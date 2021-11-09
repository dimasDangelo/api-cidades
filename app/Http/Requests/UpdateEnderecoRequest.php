<?php

namespace App\Http\Requests;

use App\Rules\idCidadeRule;
use App\Rules\idEnderecoRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEnderecoRequest extends FormRequest
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
            "logradouro" => 'required',
            "numero" => 'required',
            "bairro" => 'required',
            "id_cidade" => ['required','numeric', new idCidadeRule],
        ];
    }
    public function messages()
    {
        return[
            'id.required' => 'Informe o campo id',
            'id.numeric' => 'id campo apenas numeros',
            'logradouro.required' => 'Informe o campo Logradouro!',
            'numero.required' => 'Informe o campo numero!',
            'bairro.required' => 'Informe o campo bairro',
            'id_cidade.required' => 'Informe o campo id_cidade!',
            'id_cidade.numeric' => 'id_cidade apenas numeros!',
        ];
    }

}
