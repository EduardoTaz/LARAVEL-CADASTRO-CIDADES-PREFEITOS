<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrefeitoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\PrefeitoCidadeController;
use Illuminate\Support\Facades\Route;

// USUARIOS
Route::get('/cadastro_cidades', [CidadeController::class, "formCriarCidade"]);

Route::get('/listar_cidades', [CidadeController::class, 'listar']);

Route::post('/criar_cidades', [CidadeController::class, 'criar']);

Route::delete('/deletar_cidade/{id}', [CidadeController::class, 'deletar']);


//PREFEITOS
Route::get('/cadastro_prefeitos', [PrefeitoController::class, "formCriarPrefeito"]);

Route::get('/listar_prefeitos', [PrefeitoController::class, 'listar']);

Route::post('/criar_prefeitos', [PrefeitoController::class, 'criar']);

Route::delete('/deletar_prefeito/{id}', [PrefeitoController::class, 'deletar']);



//ATRIBUIR UM PREFEITO Á CIDADE
Route::get('/cadastro_prefeitoCidade', [PrefeitoCidadeController::class, 'formCadastrarPrefeitoCidade']);

Route::get('/listar_prefeitoCidade', [PrefeitoCidadeController::class, 'listar']);

Route::post('/criar_prefeitoCidade', [PrefeitoCidadeController::class, 'cadastrar']);

Route::delete('/deletar_prefeitoCidade/{id}', [PrefeitoCidadeController::class, 'deletar']);


//TELA INCIIAL
Route::get('/', [HomeController::class, 'telaInicial']);