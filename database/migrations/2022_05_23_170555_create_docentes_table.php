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
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigIncrements('id_docente');
            $table->unsignedBigInteger('id_carrera');



            $table->string('nombres_docente');
            $table->string('apellidos_docente');
            $table->string('correo_docente');
            $table->string('clave_docente');



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
        Schema::dropIfExists('docentes');
    }
};
