<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamopeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamopeliculas', function (Blueprint $table) {
            $table->bigIncrements('id_prestamo');
            $table->date('fecha');

            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id_cliente')->on('clientes');

            $table->unsignedBigInteger('id_peli');
            $table->foreign('id_peli')->references('id_pelicula')->on('peliculas');
            
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
        Schema::dropIfExists('prestamopeliculas');
    }
}
