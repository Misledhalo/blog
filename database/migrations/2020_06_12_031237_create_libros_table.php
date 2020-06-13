<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Foto')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('Genero')->nullable();
            $table->string('Pais')->nullable();
            $table->string('Autor')->nullable();
            $table->date('Fecha')->nullable();
            $table->string('Libro')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('libros');
    }
}
