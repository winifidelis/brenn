<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtodepartamento extends Model
{
    use HasFactory;
    protected $fillable = [
        "descricao",
        "descricaosite",
        "habilitado",
        "codigo",
        "imagemmini",
        "imagembig",
    ];
}
