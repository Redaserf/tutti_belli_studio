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
        Schema::create('producto_has_inscripciones', function (Blueprint $table) {
            $table->id();

            //Llaves foraneas
            $table->unsignedBigInteger('productoId');
            $table->unsignedBigInteger('inscripcionId');
            $table->timestamps();

            $table->foreign('productoId')->references('id')->on('productos');
            $table->foreign('inscripcionId')->references('id')->on('inscripciones');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_has_inscripcions');
    }
};
