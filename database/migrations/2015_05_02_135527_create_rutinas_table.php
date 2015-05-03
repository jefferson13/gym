<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutinasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutinas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('duracion');
            $table->integer('numero_series');
            $table->string('regularidad');
            $table->string('otros');
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
        Schema::drop('rutinas');
    }

}