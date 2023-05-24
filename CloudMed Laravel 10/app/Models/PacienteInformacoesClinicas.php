<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteInformacoesClinicas extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'id_user',
        'altura',
        'peso', 
        'tipoSanguineo',
        'alergias',
        'medicamentosUsoContinuo',
            
    ];
}
