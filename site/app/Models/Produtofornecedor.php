<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtofornecedor extends Model
{
    use HasFactory;
    protected $fillable = [
        "descricao",
        "codigo",
    ];
}
