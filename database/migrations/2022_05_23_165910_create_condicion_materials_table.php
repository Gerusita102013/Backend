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
        Schema::create('condicion_materiales', function (Blueprint $table) {
            $table->bigIncrements('id_condicionmaterial');

            $table->string('descripcion_condicionmaterial');
            $table->string('estado_condicionmaterial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condicion_materiales');
    }
};
