<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\meuResetDeSenha;
use OwenIt\Auditing\Contracts\Auditable;

use App\Traits\FormatsNumber;
use App\Traits\MaskNumber;

class User extends Authenticatable implements Auditable
{
    use HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;
    use FormatsNumber;
    use MaskNumber;

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

        'possuilinha',

        'programador',
        'telabackend',
        'sliderprincipal',
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

    public function getCpfAttribute()
    {
        return $this->toMask($this->attributes['cpf'], '###.###.###-##', '');
    }

    public function setCpfAttribute($value)
    {
        if ($value) {
            $this->attributes['cpf'] = $this->fromMask($value);
        }
    }

    public function getCnpjAttribute()
    {
        return $this->toMask($this->attributes['cnpj'], '##.###.###/####-##', '');
    }

    public function setCnpjAttribute($value)
    {
        if ($value) {
            $this->attributes['cnpj'] = $this->fromMask($value);
        }
    }
}
