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
        Schema::create('carrito_has_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carritoId');
            $table->unsignedBigInteger('productoId');
            $table->timestamps();

            $table->foreign('productoId')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('carritoId')->references('id')->on('carritos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_has_productos');
    }
};
