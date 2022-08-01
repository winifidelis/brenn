<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProdutoEsporte extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'produto_id',
        'esporte_id',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
    public function esporte()
    {
        return $this->belongsTo(Esporte::class);
    }
}
