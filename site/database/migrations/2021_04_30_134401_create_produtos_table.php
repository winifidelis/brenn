<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();

            $table->text('linkdescricao')->nullable();

            $table->integer('c0')->default(0);
            $table->integer('codprod')->default(0);
            $table->text('descricao')->nullable();
            $table->text('unidade')->nullable();
            $table->text('embalagem')->nullable();
            $table->text('codigobarras')->nullable();
            $table->text('codigomaster')->nullable();
            $table->text('marca')->nullable();
            $table->text('codigofabricante')->nullable();
            $table->text('codigofornecedor')->nullable();
            $table->text('fornecedor')->nullable();
            $table->integer('codsec')->default(0);
            $table->text('secao')->nullable();
            $table->integer('codigo_departamento')->default(0);
            $table->text('departamento')->nullable();
            $table->text('informacoestecnicas')->nullable();
            $table->text('dadostecnicos')->nullable();
            $table->text('nomeecommerce')->nullable();
            $table->text('importado')->nullable();
            $table->double('pesoliq')->default(0);
            $table->double('pesobruto')->default(0);
            $table->double('volume')->default(0);
            $table->timestamp('dtexclusao')->nullable();
            $table->text('foralinha')->nullable();
            $table->text('dirfotoprod')->nullable();

            //OS DADOS ABAIXO NÃO SÃO MODIFICADOS PELO ARQUIVO XML
            $table->text('nomeprodutosite')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
