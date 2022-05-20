<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('name', 255)->nullable();
            $table->string('login', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('telefone')->nullable();
            $table->string('cidade', 255)->nullable();
            $table->string('estado', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('tipo', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->date('data_registro')->nullable();
            $table->dateTime('ultimo_acesso')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
