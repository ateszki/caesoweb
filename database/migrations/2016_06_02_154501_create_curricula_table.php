<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('dni');
            $table->date('fecha_nacimiento');
            $table->string('puesto');
            $table->string('domicilio');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email');
            $table->string('linkedin');
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
        Schema::drop('curricula');
    }
}
