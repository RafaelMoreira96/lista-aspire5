<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'fps',
        'preset',
        'resolucao',
        'versao_driver',
        'observacao',
        'dado_cadastrado_por'
    ];
}
