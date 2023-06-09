<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameVaccines extends Model
{
    use HasFactory;

    protected $table = 'name_vaccines';
    
    protected $fillable = [
        'id', 
        'name_vaccine'
    ];

    public function cadVacina()
    {
        return $this->hasMany(Vaccines::class, 'id_vaccine');
    }
}
