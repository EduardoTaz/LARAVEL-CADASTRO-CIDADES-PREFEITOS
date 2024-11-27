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
        $relacoes = PrefeitoCidade::with('cidade', 'prefeito')->get();
    
        return view('listar_prefeitoCidade', compact('relacoes'));
    }
    
    

    public function cadastrar(Request $request)
    {
        $prefeitoId = $request->prefeito_id;
        $cidadeId = $request->cidade_id;
    
        // Verificar se já existe relação
        $exists = PrefeitoCidade::where('prefeito_id', $prefeitoId)
                                ->where('cidade_id', $cidadeId)
                                ->exists();
    
        if (!$exists) {
            PrefeitoCidade::create([
                'prefeito_id' => $prefeitoId,
                'cidade_id' => $cidadeId,
                'quantidade' => 1, // ou outro valor
            ]);
        }
    
        return redirect('/listar_prefeitoCidade');
    }
    
    public function formCadastrarPrefeitoCidade()
    {
        $prefeitos = Prefeito::all();
        $cidades = Cidade::all();

        return view('cadastro_prefeitoCidade', compact('prefeitos', 'cidades'));
    }



}