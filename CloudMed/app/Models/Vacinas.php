<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacinas extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'id_user',
        'titulo', 
        'tipoDose', 
        'data', 
        'fabricante', 
        'cidade', 
        'uf'
    ];
}
