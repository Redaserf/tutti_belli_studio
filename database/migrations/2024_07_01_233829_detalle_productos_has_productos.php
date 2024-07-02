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
        Schema::create('detalle_productos_has_productos', function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('detalleProductoId');
            $table->unsignedBigInteger('productoId');
            $table->timestamps();

            $table->foreign('productoId')->references('id')->on('productos');
            $table->foreign('detalleProductoId')->references('id')->on('detalle_productos');

            

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
