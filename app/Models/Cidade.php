<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function prefeito()
    {
        return $this->hasOne(Prefeito::class);
    }
}
