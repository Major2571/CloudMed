<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomeVacinas extends Model
{
    use HasFactory;

    protected $table = 'tipos-vacinas';
    protected $fillable = ['id', 'nomeVacina'];

    public function cadVacina()
    {
        return $this->hasMany(Vacinas::class, 'id_vacina');
    }
}
