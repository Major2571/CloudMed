<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';

    protected $fillable = [
        'id_user',
        'nome_medicamento',
        'dosagem',
        'laboratorio',
        'frequencia',
        'tratamento',
        'observacoes',
    ];


}
