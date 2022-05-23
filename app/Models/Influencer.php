<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'comissao',
        'cpf',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'uf',
        'cidade',
        'bairro',
        'telefone',
        'status',
    ];
}
