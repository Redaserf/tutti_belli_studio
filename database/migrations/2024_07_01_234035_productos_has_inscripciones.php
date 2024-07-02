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
        Schema::create('productos_has_inscripciones', function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('productoId');
            $table->unsignedBigInteger('inscripcionId');
            $table->timestamps();

            $table->foreign('productoId')->references('id')->on('productos');
            $table->foreign('inscripcionesId')->references('id')->on('inscripciones');

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
