<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('inscripciones', function(Blueprint $table){

            $table->id();
            $table->date('fechaInscripcion');
            $table->boolean('estado')->nullable();
            $table->boolean('canceladoPorAdmin')->nullable();
            $table->unsignedBigInteger('usuarioId');
            $table->unsignedBigInteger('cursoId');
            $table->timestamps();

            $table->foreign('usuarioId')->references('id')->on('users');
            $table->foreign('cursoId')->references('id')->on('cursos');



        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('inscripciones');

    }
};
