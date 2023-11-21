<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'localizacao',
        'nivel',
        'contrato',
        'salario',
        'empresa',
        'tecnologias',
        'site'
    ];
}
