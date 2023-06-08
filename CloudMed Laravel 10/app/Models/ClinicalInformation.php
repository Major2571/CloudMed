<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalInformation extends Model
{
    use HasFactory;

    protected $table = 'clinical_information';

    protected $fillable = [
        'id',
        'id_user',
        'height',
        'weight', 
        'blood_type',
        'is_donor',
        'allergies',
    ];
}
