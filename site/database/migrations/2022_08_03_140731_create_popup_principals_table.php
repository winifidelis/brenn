<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopupPrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popup_principals', function (Blueprint $table) {
            $table->id();

            $table->boolean('ativo')->default(false);

            $table->text('titulo')->nullable();
            $table->text('texto1')->nullable();
            $table->text('texto2')->nullable();
            $table->text('imagem')->nullable();

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
        Schema::dropIfExists('popup_principals');
    }
}
