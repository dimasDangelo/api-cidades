<?php

use App\Http\Controllers\EnderecosController;
use App\Http\Controllers\ImportaCidadesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('importar',[ImportaCidadesController::class, 'create'])->name("importar");
Route::get('lista-cidades',[ImportaCidadesController::class, 'show'])->name("lista-cidades");

Route::get('lista-enderecos',[EnderecosController::class, 'show'])->name("lista-enderecos");
Route::post('cadastra-endereco',[EnderecosController::class, 'create'])->name('cadastra-endereco');
Route::post('atualiza-endereco',[EnderecosController::class, 'update'])->name('atualiza-endereco');
Route::delete('deleta-endereco',[EnderecosController::class, 'delete'])->name('deleta-endereco');
