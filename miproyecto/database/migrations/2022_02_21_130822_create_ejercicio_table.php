<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ejercicio', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descripcion');
            
            $table->string('url_img');
            $table->string('url_video')->nullable();
            
            $table->timestamps('created_at')->nullable();

            $table->unsignedBigInteger('dificultad');
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('grupo_mucular');
            $table->unsignedBigInteger('duracion');
            $table->unsignedBigInteger('equipamiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ejercicio');
    }
}
