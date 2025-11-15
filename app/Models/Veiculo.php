<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculos';

    protected $fillable = [
        'marca',
        'modelo',
        'foto1',
        'foto2',
        'foto3',
        'ano',
        'quilometragem',
        'valor',
        'descricao',
    ];

    protected $casts = [
        'valor' => 'decimal:2',
        'ano' => 'integer',
        'quilometragem' => 'integer',
    ];
}
