<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;

class ImportaCidadesController extends Controller
{
    public function create(){
        $city = Cidade::all();
         $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/mg/municipios');
        $cidades = json_decode($response);
        
        if($city->isEmpty()){
            for($i = 0; $i < count($cidades); $i++){
                $cidade[] = [
                    "nome" =>    $cidades[$i]->nome
                    ]; 
            }
         Cidade::insert($cidade);
         return json_encode(array("satus" => true, "response" => "Importação Realizada!"));
        }else{
            return json_encode(array("satus" => false, "response" => "Importação já Realizada!"));
        }      
       
    }
    public function show(){
        $city = Cidade::all();
        if(!$city->isEmpty()){
            return json_encode(array("status" => true, "response" => $city));
        }else
         {
            return json_encode(array("status" => false, "response" => "cidades não importadas!"));
         }    
    }
}
