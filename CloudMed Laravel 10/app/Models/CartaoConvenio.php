<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoConvenio extends Model
{
    use HasFactory;

    protected $fillable = [

        'idCartaoConvenio',
        'id_user',
        'numero',
        'nomeConvenio', 
        'validade'
        
    ];

}
