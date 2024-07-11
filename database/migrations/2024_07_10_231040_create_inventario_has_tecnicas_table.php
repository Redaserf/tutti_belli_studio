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
        Schema::create('inventario_has_tecnicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Llaves foraneas
            $table->unsignedBigInteger('tecnicaId');
            $table->foreign('tecnicaId')->references('id')->on('tecnicas');

            $table->unsignedBigInteger('inventarioId');
            $table->foreign('inventarioId')->references('id')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario_has_tecnicas');
    }
};
