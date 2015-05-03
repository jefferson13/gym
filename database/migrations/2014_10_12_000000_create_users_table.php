<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->string('email')->unique();
            $table->string('type');
            $table->string('password',60)->nullable();
            $table->double('altura')->nullable();
            $table->double('peso')->nullable();
            $table->integer('telefono')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }

}
