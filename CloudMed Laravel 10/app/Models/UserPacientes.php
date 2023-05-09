<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPacientes extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id',
        'id_user',
        'idInformacoesClinicas',
        'idCartaoSus',
        'idCartaoConvenio',
        'sobrenome',
        'dataNascimento', 
        'rg',
        'cpf', 
        'cidade', 
        'uf',
        'email',
        'telefone',
        
        
    ];
}
