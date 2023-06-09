<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccines extends Model
{
    use HasFactory;

    protected $table = 'vaccines';
    
    protected $fillable = [
        'id',
        'id_user',
        'id_vaccine',
        'id_uf',
        'new_vaccine_name', 
        'doses', 
        'vaccination_date', 
        'manufacturer', 
        'lot_number',
        'city'
    ];

    public function nameVaccine()
    {
        return $this->belongsTo(NameVaccines::class, 'id_vaccine');
    }

    public function uf()
    {
        return $this->belongsTo(UFs::class, 'id_uf');
    }
}
