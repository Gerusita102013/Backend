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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->bigIncrements('id_reservacion');
            $table->unsignedBigInteger('id_laboratorio');
            $table->unsignedBigInteger('id_docente');
            $table->unsignedBigInteger('id_horario');

            $table->string('nombres_practicasreservacion');
            $table->string('descripcion_practicasreservacion');
            $table->date('fecha_reservacion');
            $table->string('numero_estudiantes');



            $table->foreign('id_laboratorio')->references('id_laboratorio')->on('laboratorios')->onDelete('cascade');
            $table->foreign('id_docente')->references('id_docente')->on('docentes')->onDelete('cascade');
            $table->foreign('id_horario')->references('id_horario')->on('horarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
};
