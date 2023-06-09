<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medications extends Model
{
    use HasFactory;

    protected $table = 'medications';

    protected $fillable = [
        'id_user',
        'medication_name',
        'dosage',
        'laboratory',
        'frequency',
        'treatment',
        'observations',
    ];


}
