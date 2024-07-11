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
        Schema::create('invetario_has_inscripcions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Llaves foraneas
            $table->unsignedBigInteger('inscripcionId');
            $table->foreign('inscripcionId')->references('id')->on('inscripciones');

            $table->unsignedBigInteger('inventarioId');
            $table->foreign('inventarioId')->references('id')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invetario_has_inscripcions');
    }
};
