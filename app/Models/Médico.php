<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Médico extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_completo',
        'especialidade',
        'data_nascimento',
        'registro_profissional',
        'cpf',
        'email',
        'telefone',
        'horario'
    ];
}
