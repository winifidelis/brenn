<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Log extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id',
        'descricao',
        'controler',
        'funcao',
        'user_id',
    ];

    public function user()
    {
        //belongsTo pertence a um ..
        return $this->belongsTo(User::class);
    }

    public static function gravarLog($descricao, $controller,$funcao)
    {
        $user = Auth::user();
        if($user == null){
            //ESSA VERIFICAÇÃO É PARA QUANDO EU GRAVAR UM LOG SEM USUÁRIO LOGADO
            $user['id'] = 1;
        }
        
        $data['user_id'] = $user['id'];

        $data['descricao'] = $descricao;
        $data['controler'] = $controller;
        $data['funcao'] = $funcao;
        Log::create($data);
    }
}

