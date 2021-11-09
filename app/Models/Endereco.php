<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $table = "enderecos";
    use HasFactory;
    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'id_cidade'	 
    ];
}
