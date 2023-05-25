<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

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

    public function cartaoSus()
    {
        return $this->belongsTo(CartaoSus::class, 'id_informacoes_clinicas');
    }

    public function cartaoConvenio()
    {
        return $this->belongsTo(CartaoConvenio::class, 'id_cartao_sus');
    }

    public function informacoesClinicas()
    {
        return $this->belongsTo(PacienteInformacoesClinicas::class, 'id_cartao_convenio');
    }

    public function uf()
    {
        return $this->belongsTo(UFs::class, 'id_uf');
    }
}
