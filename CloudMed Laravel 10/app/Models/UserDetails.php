<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = 'user_details';

    protected $fillable = [

        'id',
        'id_user',
        'id_uf',
        'sobrenome',
        'dataNascimento',
        'rg',
        'cpf',
        'cidade',
        'telefone',
        'status'

    ];

    public function userDetail()
    {
        return $this->hasOne(User::class, 'id_user');
    }

    public function uf()
    {
        return $this->belongsTo(UFs::class, 'id_uf');
    }
}
