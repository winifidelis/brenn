<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocoes extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagem',
        'descricao',
        'produto_id',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
