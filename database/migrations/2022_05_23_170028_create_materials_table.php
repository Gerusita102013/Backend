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
        Schema::create('materiales', function (Blueprint $table) {
            $table->bigIncrements('id_material');
            $table->unsignedBigInteger('id_laboratorio');
            $table->unsignedBigInteger('id_condicionmaterial');

            $table->string('nombre_material');
            $table->string('descripcion_material');
            $table->string('imagen_material');


            $table->foreign('id_laboratorio')->references('id_laboratorio')->on('laboratorios')->onDelete('cascade');
            $table->foreign('id_condicionmaterial')->references('id_condicionmaterial')->on('condicion_materiales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiales');
    }
};
