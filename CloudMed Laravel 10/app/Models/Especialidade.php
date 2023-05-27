<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = 'especialidade';

    protected $fillable = [
        'id',
        'especialidade'
    ];

    public function exames()
    {
        return $this->hasMany(Exames::class, 'id_especialidade');
    }
}
