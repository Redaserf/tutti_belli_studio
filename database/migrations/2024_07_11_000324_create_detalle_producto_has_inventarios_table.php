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
        Schema::create('detalle_producto_has_inventarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //llaves foraneas
            $table->unsignedBigInteger('detalleProductoId');
            $table->foreign('detalleProductoId')->references('id')->on('detalle_productos');

            $table->unsignedBigInteger('inventarioId');
            $table->foreign('inventarioId')->references('id')->on('inventarios');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_producto_has_inventarios');
    }
};
