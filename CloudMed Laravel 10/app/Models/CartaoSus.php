<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoSus extends Model
{
    use HasFactory;

    
    protected $fillable = [

        'idCartaoSus',
        'id_user',
        'numero',

        
    ];
}
