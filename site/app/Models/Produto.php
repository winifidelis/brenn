<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Produto extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'nome',
        'linknome',
        'linkdescricao',
        'descricao',
        'unidade',
        'codigobarras',
        'informacoestecnicas',
        'dadostecnicos',
        'pesoliq',
        'pesobruto',
        'volume',
        'dataexclusao',
        'foralinha',
        'valor',
        'temdesconto',
        'valorcomdesconto',
    ];

    public function getValorAttribute()
    {
        //return $this->toMask($this->attributes['valor'], '###.###.###-##', '');
        return number_format($this->attributes['valor'], 2, ",", ".");
    }

    public function setValorAttribute($value)
    {
        if ($value) {
            //$this->attributes['cpf'] = $this->fromMask($value);
            $value = str_replace('.', '', $value);
            $value = str_replace(',', '.', $value);
            $this->attributes['valor'] = $value;
        }
    }

    public function getValorcomdescontoAttribute()
    {
        //return $this->toMask($this->attributes['valorcomdesconto'], '###.###.###-##', '');
        return number_format($this->attributes['valorcomdesconto'], 2, ",", ".");
    }

    public function setValorcomdescontoAttribute($value)
    {
        if ($value) {
            //$this->attributes['cpf'] = $this->fromMask($value);
            $value = str_replace('.', '', $value);
            $value = str_replace(',', '.', $value);
            $this->attributes['valorcomdesconto'] = $value;
        }
    }







    public function produtoFoto()
    {
        return $this->hasMany(ProdutoFoto::class);
    }
    public function produtoEsporte()
    {
        return $this->hasMany(ProdutoEsporte::class);
    }
    public function userlinha()
    {
        return $this->hasOne(UserLinha::class);
    }






    public static function geraNomeLink($nome)
    {
        $nome = preg_replace('/[áàãâä]/ui', 'a', $nome);
        $nome = preg_replace('/[éèêë]/ui', 'e', $nome);
        $nome = preg_replace('/[íìîï]/ui', 'i', $nome);
        $nome = preg_replace('/[óòõôö]/ui', 'o', $nome);
        $nome = preg_replace('/[úùûü]/ui', 'u', $nome);
        $nome = preg_replace('/[ç]/ui', 'c', $nome);
        // $nome = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $nome);
        $nome = preg_replace('/[^a-z0-9]/i', '_', $nome);
        $nome = preg_replace('/_+/', '_', $nome); // ideia do Bacco :)
        $nome  = strtolower($nome);
        return $nome;
    }
}
