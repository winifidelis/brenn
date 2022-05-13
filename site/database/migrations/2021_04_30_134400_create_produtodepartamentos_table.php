<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutodepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtodepartamentos', function (Blueprint $table) {
            $table->id();

            $table->string("descricao")->nullable();
            $table->string("descricaosite")->nullable();
            $table->boolean("habilitado")->default(true);
            $table->string("codigo")->nullable();
            $table->string('imagemmini')->default('default.png');
            $table->string('imagembig')->default('default.png');

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
        Schema::dropIfExists('produtodepartamentos');
    }
}
