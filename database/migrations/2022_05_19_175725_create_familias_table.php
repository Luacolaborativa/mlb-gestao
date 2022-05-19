<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->integer("id_responsavel_familiar");
            $table->integer("quant_membros");
            $table->string("conjuje");
            $table->string("conjuje_profissao");
            $table->string("conjuje_trabalhando_atualmente");
            $table->string("conjuje_ocupacao");
            $table->integer("quant_criancas");
            $table->integer("quant_pessoas_cuidados_especiais");
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
        Schema::dropIfExists('familias');
    }
}
