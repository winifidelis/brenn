<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProdutoUserLinha extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'produto_id',
        'userlinha_id',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
    public function userlinha()
    {
        return $this->belongsTo(userlinha::class);
    }
}
