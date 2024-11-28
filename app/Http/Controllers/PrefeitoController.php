<?php

namespace App\Http\Controllers;

use App\Models\Prefeito;
use Illuminate\Http\Request;

class PrefeitoController extends Controller
{
    public function criar(Request $request) {
        $prefeito = new Prefeito;
        $prefeito->nome = $request->nome;
        $prefeito->idade = $request->idade;
        $prefeito->partido = $request->partido;
        $prefeito->mandato_inicio = $request->mandato_inicio;
        $prefeito->mandato_fim = $request->mandato_fim;

        $prefeito->save();
        return redirect('/listar_prefeitos');
    }
    public function listar() {
        $prefeitos = Prefeito::all();

        return view("prefeitos", ["prefeitos"=>$prefeitos]);
    }

    public function formCriarPrefeito() {
        return view("cadastro_prefeitos");
    }

    public function deletar($id)
    {
        $prefeito = new Prefeito; 
        \DB::table('prefeito_cidade')->where('prefeito_id', $id)->delete();
        
        $prefeito -> find($id) -> delete(); // deleta o cadastro

        return redirect('/listar_prefeitos');
    }

}

