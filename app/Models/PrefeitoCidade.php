<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrefeitoCidade extends Model
{
    use HasFactory;

    protected $table = 'prefeito_cidade';

    protected $fillable = ['prefeito_id', 'cidade_id', 'data_fundacao'];



    // Relaconametos
    public function prefeito()
    {
        return $this->belongsTo(Prefeito::class);
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
