<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;

    protected $table = 'exam';

    protected $fillable = [
        
        'id',
        'id_user',
        'id_uf',
        'id_medical_specialty',
        'exam_title',
        'medical_specialty', 
        'exam_date',
        'institution', 
        'city', 
        'uf',
        'file_exam_name', 
        
    ];

    public function medical_specialty()
    {
        return $this->belongsTo(MedicalSpecialty::class, 'id_medical_specialty');
    }

    public function uf()
    {
        return $this->belongsTo(UFs::class, 'id_uf');
    }
    
}
