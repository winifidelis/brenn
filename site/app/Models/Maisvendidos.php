<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maisvendidos extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
