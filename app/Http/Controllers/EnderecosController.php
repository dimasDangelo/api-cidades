<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnderecoRequest;
use App\Http\Requests\deleteEnderecoRequest;
use App\Http\Requests\UpdateEnderecoRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    public function create(CreateEnderecoRequest $request){
        $endereco = new Endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->id_cidade = $request->id_cidade;
        $endereco->save();
        return json_encode(array("status" => true, "response" => "Endereço Cadastrado!"));
    }

    public function update(UpdateEnderecoRequest $request){
        $endereco = Endereco::find($request->id);
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->id_cidade = $request->id_cidade;
        $endereco->save();
        return json_encode(array("status" => true, "response" => "Endereço Atualizado!"));
    }

    public function delete(deleteEnderecoRequest $request){
        $endereco = Endereco::find($request->id);
        $endereco->delete();
        return json_encode(array("status" => true, "response" => "Endereco Excluído!"));
    }
    public function show(){
        $endereco = Endereco::all();
        return json_encode(array("status" => true, "response" => $endereco));
    }
}
