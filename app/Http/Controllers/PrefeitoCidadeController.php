<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Prefeito;
use App\Models\PrefeitoCidade;

class PrefeitoCidadeController extends Controller
{
    public function listar()
    {
        $relacoes = PrefeitoCidade::with('cidade', 'prefeito')->get(); // recebe as tabelas cidade e prefito
        return view('listar_prefeitoCidade', compact('relacoes'));
    }

    public function cadastrar(Request $request)
    {
        $cidadeId = $request->cidade_id;

        $jaTemPrefeito = PrefeitoCidade::where('cidade_id', $cidadeId)->exists();

        if ($jaTemPrefeito) {
            return redirect('/cadastro_prefeitoCidade')->with('error', 'Esta cidade já possui um prefeito eleito.');

        }

        PrefeitoCidade::create([
            'prefeito_id' => $request->prefeito_id,
            'cidade_id' => $cidadeId,
            'data_fundacao' => $request->data_fundacao ?? now(), // ?? - operador php que verifica a operação se a data for nula ela será preenchida com a data atual
        ]);

        return redirect('/listar_prefeitoCidade');
    }

    public function formCadastrarPrefeitoCidade()
    {
        $prefeitos = Prefeito::all();
        $cidades = Cidade::all();

        return view('cadastro_prefeitoCidade', compact('prefeitos', 'cidades'));
    }

    public function deletar($id)
    {
        $prefeitoCidade = new PrefeitoCidade; 
        
        $prefeitoCidade -> find($id) -> delete();

        return redirect('/listar_prefeitoCidade');
    }
}
