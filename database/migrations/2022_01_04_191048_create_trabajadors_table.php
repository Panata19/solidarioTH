<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('cedula')->unique();
            $table->string('fecha_nac');
            $table->string('tipo_sangre');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->string('estado_civil');
            $table->string('nacionalidad');
            $table->string('num_hijos');
            $table->string('telefono');
            $table->string('cv');
            $table->string('foto');
            $table->string('activo');
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
        Schema::dropIfExists('trabajadors');
    }
}
