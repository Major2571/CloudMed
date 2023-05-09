<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exames extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id',
        'id_user',
        'titulo',
        'especialidade', 
        'data',
        'instituicao', 
        'cidade', 
        'uf',
        //'nomeArquivo', 
        
    ];

    protected $dates = ['date'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
}
