<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'material',
        'categoria',
        'peso_kg',
        'condominio',
        'ponto_coleta',
        'data_coleta',
        'status',
        'observacoes',
    ];

    protected $casts = [
        'data_coleta' => 'date',
        'peso_kg' => 'decimal:2',
    ];
}