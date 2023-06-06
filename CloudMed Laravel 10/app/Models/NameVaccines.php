<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameVaccines extends Model
{
    use HasFactory;

    protected $table = 'tipos-vacinas';
    
    protected $fillable = [
        'id', 
        'nomeVacina'
    ];

    public function cadVacina()
    {
        return $this->hasMany(Vaccines::class, 'id_vacina');
    }
}
