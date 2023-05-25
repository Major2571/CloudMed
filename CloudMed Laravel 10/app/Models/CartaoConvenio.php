<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoConvenio extends Model
{
    use HasFactory;

    protected $table = 'cartao_convenios';

    protected $fillable = [
        'id',
        'id_user',
        'numero',
        'nomeConvenio',
        'plano',
        'nome_arquivo',
        
    ];

}
