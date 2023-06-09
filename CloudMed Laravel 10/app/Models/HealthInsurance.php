<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthInsurance extends Model
{
    use HasFactory;

    protected $table = 'health_insurance';

    protected $fillable = [
        'id',
        'id_user',
        'insurance_number',
        'insurance_name',
        'insurance_plan',
        'file_insurance_name',
    ];

}
