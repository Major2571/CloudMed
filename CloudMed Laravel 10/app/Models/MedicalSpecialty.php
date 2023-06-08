<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalSpecialty extends Model
{
    protected $table = 'medical_specialty';

    protected $fillable = [
        'id',
        'medical_specialty'
    ];

    public function exam()
    {
        return $this->hasMany(Exams::class, 'id_medical_specialty');
    }
}
