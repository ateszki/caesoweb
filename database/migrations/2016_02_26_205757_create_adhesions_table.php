<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdhesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adhesions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social')->nullable();
    	    $table->string('IVA')->nullable();
            $table->string('cuit')->nullable();
            $table->string('responsable')->nullable();
            $table->string('cargo')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('cantidad_sillones')->nullable();
            $table->string('recomendado_por')->nullable();
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
        Schema::drop('adhesions');
    }
}
