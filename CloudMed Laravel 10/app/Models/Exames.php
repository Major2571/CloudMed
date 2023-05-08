<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exames extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titulo',
        'especialidade', 
        'data',
        'instituicao', 
        'cidade', 
        'uf',
        //'nomeArquivo', 
        
    ];
}
