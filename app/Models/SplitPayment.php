<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SplitPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pedido',
        'valor_total',
        'comissao',
        'cliente',
        'influencer',
        'comprovante',
        'id_influencer',
    ];
}
