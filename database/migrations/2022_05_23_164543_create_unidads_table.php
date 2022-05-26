<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('id_unidad');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_redsocial');
            $table->string('nombre_unidad');
            $table->string('descripcion_unidad');
            $table->string('logo_unidad');

            $table->foreign('id_redsocial')->references('id_redsocial')->on('redes_sociales')->onDelete('cascade');
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
};
