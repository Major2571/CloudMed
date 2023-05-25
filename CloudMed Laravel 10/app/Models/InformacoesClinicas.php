<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacoesClinicas extends Model
{
    use HasFactory;

    protected $table = 'informacoes_clinicas';

    protected $fillable = [
        'id',
        'id_user',
        'altura',
        'peso', 
        'tipoSanguineo',
        'doador',
        'alergias',
    ];
}