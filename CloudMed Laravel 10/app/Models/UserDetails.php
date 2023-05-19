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
        'idInformacoesClinicas',
        'idCartaoSus',
        'idCartaoConvenio',
        'sobrenome',
        'dataNascimento', 
        'rg',
        'cpf', 
        'cidade', 
        'uf',
        'email',
        'telefone',
        
        
    ];

    public function cartaoSus()
    {
        return $this->belongsTo(CartaoSus::class, 'idCartaoSus');
    }
    
    public function cartaoConvenio()
    {
        return $this->belongsTo(CartaoConvenio::class, 'idCartaoConvenio');
    }

    public function informacoesClinicas()
    {
        return $this->belongsTo(PacienteInformacoesClinicas::class, 'idInformacoesClinicas');
    }
    
}
