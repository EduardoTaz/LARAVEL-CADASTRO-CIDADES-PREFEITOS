<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function criar(Request $request) {
        $cidade = new Cidade;
        $cidade->cidade = $request->cidade;
        $cidade->estado = $request->estado;
        $cidade->populacao = $request->populacao;
        $cidade->data_fundacao = $request->data_fundacao;

        $cidade->save();
        return redirect('/listar_cidades');
    }

    public function listar() {
        $cidades = Cidade::all();

        return view("cidades", ["cidades"=>$cidades]);
    }

    public function formCriarCidade() {
        return view("cadastro_cidades");
    }

    public function deletar($id)
    {
        $cidade = new Cidade; 
        \DB::table('prefeito_cidade')->where('cidade_id', $id)->delete();
        
        $cidade -> find($id) -> delete(); // deleta o cadastro

        return redirect('/listar_cidades');
    }
}