<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoSus extends Model
{
    use HasFactory;

    protected $table = 'cartao_sus';

    protected $fillable = [
        
        'id',
        'id_user',
        'numero',
        'nome_arquivo'
        
    ];
}
