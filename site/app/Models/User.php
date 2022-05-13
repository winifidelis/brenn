<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\meuResetDeSenha;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar',
        'email',
        'password',

        'tipopessoa',
        'cpf',
        'cnpj',
        'telefone',
        'whatsapp',
        'cep',
        'endereco',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'complemento',
        'checkboxemail',
        'checkboxwhatsapp',
        'checkboxregulamento',

        'nascimento',

        'programador',
        'telabackend',
        'enviarxml',
        'enviarimagens',
        'popupprincipal',
        'promocoes',
        'sliderprincipal',
        'userdashboard',
        'administrador',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new meuResetDeSenha($token));
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
