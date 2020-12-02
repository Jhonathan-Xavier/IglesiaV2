<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->Date('fechaNacimiento');
            $table->string('correo');
            $table->string('profesion');
            $table->string('alergia');
            $table->string('grupoSanguineo');
            $table->string('facebook');
            $table->string('direccion');
            $table->string('telefono');

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
        Schema::dropIfExists('alumnos');
    }
}
