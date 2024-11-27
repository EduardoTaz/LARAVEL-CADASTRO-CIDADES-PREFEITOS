<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefeito extends Model
{
    protected $table = 'prefeitos'; // fala o nome da tabela

    public function repeticaoPrefeito()
    {
        // Obtendo registros únicos de toda a tabela
        $uniquePrefeitos = self::distinct()->get(); //  o método distinct() exclui registros duplicados

        return $uniquePrefeitos;
    }

    public function cidades()
    {
        return $this->belongsToMany(Cidade::class, 'prefeito_cidade')->withPivot('quantidade');
    }
    
}
