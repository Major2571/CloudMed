<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UFs extends Model
{
    use HasFactory;

    protected $table = 'uf';

    protected $fillable = [
        'id',
        'estado',
        'uf'
    ];

    public function exam()
    {
        return $this->hasMany(Exams::class, 'id_uf');
    }

    public function vacinas()
    {
        return $this->hasMany(Vacinas::class, 'id_uf');
    }
}
