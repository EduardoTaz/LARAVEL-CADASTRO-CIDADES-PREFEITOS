<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrefeitoCidade extends Model
{
    use HasFactory;

    protected $table = 'prefeito_cidade';

    // Permite atribuições em massa
    protected $fillable = ['prefeito_id', 'cidade_id', 'quantidade'];

    // Relacionamento com Prefeito
    public function prefeito()
    {
        return $this->belongsTo(Prefeito::class);
    }

    // Relacionamento com Cidade
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
