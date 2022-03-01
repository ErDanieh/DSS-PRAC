<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EjercicioGrupoMuscular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejerciciogrupomuscular', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ejercicio');
            $table->unsignedBigInteger('id_grupo_muscular');
            
            $table->foreign('id_ejercicio')->references('id')->on('ejercicios')->onDelete('cascade');
            $table->foreign('id_grupo_muscular')->references('id')->on('grupo_musculars')->onDelete('cascade');
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
        Schema::dropIfExists('ejerciciogrupomuscular');
    }
}
