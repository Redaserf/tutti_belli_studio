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
        Schema::create('detalle_tecnicas_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citaId');
            $table->unsignedBigInteger('tecnicaId');
            $table->unsignedBigInteger('productoId');

            $table->integer('cantidadProducto');

            $table->boolean('estadoProducto')->nullable();
            $table->timestamps();

            $table->foreign('citaId')->references('id')->on('citas');
            $table->foreign('tecnicaId')->references('id')->on('tecnicas');
            $table->foreign('productoId')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('detalle_tecnicas');

    }
};
