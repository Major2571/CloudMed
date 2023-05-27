<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacinas extends Model
{
    use HasFactory;

    protected $table = 'vacinas';
    
    protected $fillable = [
        'id',
        'id_user',
        'id_vacina',
        'id_uf',
        'titulo', 
        'tipoDose', 
        'data', 
        'fabricante', 
        'lote',
        'cidade'
    ];

    public function nomeVacina()
    {
        return $this->belongsTo(NomeVacinas::class, 'id_vacina');
    }

    public function uf()
    {
        return $this->belongsTo(UFs::class, 'id_uf');
    }
}
