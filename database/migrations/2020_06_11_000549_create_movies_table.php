<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Foto')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('Genero')->nullable();
            $table->string('Pais')->nullable();
            $table->string('Lenguage')->nullable();
            $table->date('Fecha')->nullable();
            $table->string('Correo')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
