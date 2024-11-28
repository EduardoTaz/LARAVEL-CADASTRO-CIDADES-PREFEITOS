<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function prefeitos()
    {
        return $this->belongsToMany(Prefeito::class, 'prefeito_cidade')->withPivot('partido');
    }
    
    
}
