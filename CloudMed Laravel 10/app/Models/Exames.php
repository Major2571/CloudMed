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
        'id_uf',
        'id_especialidade',
        'titulo',
        'especialidade', 
        'data',
        'instituicao', 
        'cidade', 
        'uf',
        'nome_arquivo', 
        
    ];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class, 'id_especialidade');
    }

    public function uf()
    {
        return $this->belongsTo(UFs::class, 'id_uf');
    }
    
}
