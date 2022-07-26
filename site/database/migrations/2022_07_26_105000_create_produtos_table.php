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

            $table->text('nome')->nullable();
            $table->text('linkdescricao')->nullable();
            $table->text('descricao')->nullable();
            $table->text('unidade')->nullable();
            $table->text('embalagem')->nullable();
            $table->text('codigobarras')->nullable();
            $table->text('informacoestecnicas')->nullable();
            $table->text('dadostecnicos')->nullable();
            $table->double('pesoliq')->default(0);
            $table->double('pesobruto')->default(0);
            $table->double('volume')->default(0);
            $table->date('dataexclusao')->nullable();
            $table->text('foralinha')->nullable();

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
