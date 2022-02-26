<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entrenamiento', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('id_ejercicio');
            
            
            $table->primary(['id', 'id_ejercicio']);

            $table->unsignedBigInteger('dificultad');
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('grupo_mucular');
            $table->unsignedBigInteger('equipamiento');
            $table->unsignedBigInteger('duracion');

            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Entrenamiento');
    }
}
