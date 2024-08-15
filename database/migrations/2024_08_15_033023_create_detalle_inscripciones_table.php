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
        Schema::create('detalle_inscripciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ventaId');
            $table->unsignedBigInteger('inscripcionId');
            $table->timestamps();

            $table->foreign('inscripcionId')->references('id')->on('inscripciones');
            $table->foreign('ventaId')->references('id')->on('ventas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_inscripciones');
    }
};
