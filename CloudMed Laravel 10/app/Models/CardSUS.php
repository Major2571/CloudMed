<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardSUS extends Model
{
    use HasFactory;

    protected $table = 'card_sus';

    protected $fillable = [
        'id',
        'id_user',
        'number_cardSUS',
        'file_cardSUS_name'
    ];
}
