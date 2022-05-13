<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'linkdescricao',
        'c0',
        'codprod',
        'descricao',
        'unidade',
        'embalagem',
        'codigobarras',
        'codigomaster',
        'marca',
        'codigofabricante',
        'codigofornecedor',
        'fornecedor',
        'codsec',
        'secao',
        'codigo_departamento',
        'departamento',
        'informacoestecnicas',
        'dadostecnicos',
        'nomeecommerce',
        'importado',
        'pesoliq',
        'pesobruto',
        'volume',
        'dtexclusao',
        'foralinha',
        'dirfotoprod',

        //OS DADOS ABAIXI NÃO SÃO MODIFICADOS PELO ARQUIVO XML
        'nomeprodutosite',
    ];

    public function promocoes()
    {
        return $this->hasMany(Promocoes::class);
    }
    public function maisvendidos()
    {
        return $this->hasOne(Maisvendidos::class);
    }

    public function scopeDepartamentoLink($query, $dep)
    {
        if ($dep == null || $dep == "#" || $dep == "" || $dep == " ") {
            return $query->where("departamento", "!=", $dep);
        } else {
            $dep_explode = explode("-*-", $dep);
            unset($dep_explode[0]);
            $query->where("departamento", "=", $dep_explode[1]);
            for ($i = 1; $i < count($dep_explode); $i++) {
                $query->orWhere("departamento", "=", $dep_explode[$i + 1]);
            }
            return $query;
        }
    }
    public function scopeMarcaLink($query, $mar)
    {
        if ($mar == null || $mar == "#" || $mar == "" || $mar == " ") {
            return $query->where("marca", "!=", $mar);
        } else {
            $mar_explode = explode("-*-", $mar);
            unset($mar_explode[0]);
            $query->where("marca", "=", $mar_explode[1]);
            for ($i = 1; $i < count($mar_explode); $i++) {
                $query->orWhere("marca", "=", $mar_explode[$i + 1]);
            }
            return $query;
        }
    }
    public function scopeSecaoLink($query, $sec)
    {
        if ($sec == null || $sec == "#" || $sec == "" || $sec == " ") {
            return $query->where("secao", "!=", $sec);
        } else {
            $sec_explode = explode("-*-", $sec);
            unset($sec_explode[0]);
            $query->where("secao", "=", $sec_explode[1]);
            for ($i = 1; $i < count($sec_explode); $i++) {
                $query->orWhere("secao", "=", $sec_explode[$i + 1]);
            }
            return $query;
        }
    }

    public function scopeDepartamento($query, $dep)
    {
        if ($dep == null || $dep == "#" || $dep == "" || $dep == " ") {
            return $query->where("codigo_departamento", "!=", $dep);
        } else {
            return $query->where("codigo_departamento", "=", $dep);
        }
    }

    public function scopeNomeEcommerce($query, $nome)
    {
        if ($nome == null || $nome == "#" || $nome == "" || $nome == " ") {
            return $query->where("nomeecommerce", "!=", $nome);
        } else {
            $nome_explode = explode(" ", $nome);
            //vou adicionar aqui o nome alias
            for ($j = 0; $j < count($nome_explode); $j++) {
                $nomeAlias = Aliasbusca::select('*')
                    ->where('busca', '=', $nome_explode[$j])
                    ->get();

                for ($i = 0; $i < count($nomeAlias); $i++) {
                    array_push($nome_explode, $nomeAlias[$i]['add']);
                }
            }

            /*
            for ($i = 0; $i < count($nome_explode); $i++) {
                $query->where('nomeecommerce', 'like', '%' . $nome_explode[$i] . '%');
            }
            */
            $query->where(function ($q) use ($nome_explode) {
                for ($i = 0; $i < count($nome_explode); $i++) {
                    $q->orWhere('nomeecommerce', 'like', '%' . $nome_explode[$i] . '%');
                }
            });
        }
        return $query;
    }

    public function scopeOrdenarLista($query, $ordem)
    {
        if ($ordem == "az") {
            return $query->orderBy('nomeecommerce', 'asc');
        } else if ($ordem == "za") {
            return $query->orderBy('nomeecommerce', 'desc');
        } else if ($ordem == "lancamento") {
            return $query->orderBy('id', 'desc');
        } else {
            //default
            return $query->orderBy('nomeecommerce', 'asc');
        }
    }
}
