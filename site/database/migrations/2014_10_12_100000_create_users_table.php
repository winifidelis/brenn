<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default('default.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('tipopessoa');
            $table->string('cpf')->unique();
            $table->string('cnpj')->unique();
            $table->string('telefone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('cep')->nullable();
            $table->text('endereco')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->text('bairro')->nullable();
            $table->text('rua')->nullable();
            $table->text('complemento')->nullable();
            $table->boolean('checkboxemail');
            $table->boolean('checkboxwhatsapp');
            $table->boolean('checkboxregulamento');

            $table->timestamp('nascimento')->nullable();

            $table->boolean('programador')->default(false);
            $table->boolean('telabackend')->default(false);
            $table->boolean('sliderprincipal')->default(false);
            $table->boolean('administrador')->default(false);

            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
