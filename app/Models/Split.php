<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Split extends Model
{
    use HasFactory;

    protected $fillable = [
        'influencer',
        'cliente',
        'valor',
        'valor_total',
        'status',
        'id_pedido',
        'id_influencer',

    ];
}
