<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pedido',
        'id_influencer',
    ];

    public function influencer()
    {
        return $this->belongsTo(Influencer::class, 'id_influencer');
    }
}
