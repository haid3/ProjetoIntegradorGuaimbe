<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransparencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transparencias', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('id_rec_arrec_detalhe')->nullable();
            $table->string('ano_exercicio')->nullable();
            $table->string('ds_municipio')->nullable();
            $table->string('ds_orgao')->nullable();
            $table->string('mes_referencia')->nullable();
            $table->string('mes_ref_extenso')->nullable();
            $table->string('ds_poder')->nullable();
            $table->string('ds_fonte_recurso')->nullable();
            $table->string('ds_cd_aplicacao_fixo')->nullable();
            $table->string('ds_cd_aplicacao_variavel')->nullable();
            $table->string('ds_categoria')->nullable();
            $table->string('ds_subcategoria')->nullable();
            $table->string('ds_fonte')->nullable();
            $table->string('ds_rubrica')->nullable();
            $table->string('ds_alinea')->nullable();
            $table->string('ds_subalinea')->nullable();
            $table->string('vl_arrecadacao')->nullable();
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
        Schema::dropIfExists('transparencia');
    }
}
