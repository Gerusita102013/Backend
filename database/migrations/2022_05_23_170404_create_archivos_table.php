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
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('id_archivo');
            $table->unsignedBigInteger('id_laboratorio');
            $table->unsignedBigInteger('id_tipoarchivo');


            $table->string('nombre_archivo');
            $table->string('descripcion_archivo');
            $table->string('archivo');


            $table->foreign('id_laboratorio')->references('id_laboratorio')->on('laboratorios')->onDelete('cascade');

            $table->foreign('id_tipoarchivo')->references('id_tipoarchivo')->on('tipos_archivos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivos');
    }
};
