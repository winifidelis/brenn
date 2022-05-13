<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatsappvendedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'whatsapp',
        'mensagem',
        'posicao',
        'clique',
        'bloqueado'
    ];
}
