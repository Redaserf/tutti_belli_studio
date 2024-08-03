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
        Schema::create('detalle_productos', function(Blueprint $table){

            $table->id();
            $table->string('nombre');
            $table->double('precio');
            $table->string('descripcion');
//            $table->integer('cantidadProductos');
//            $table->unsignedBigInteger('descuentoId')->nullable();
            $table->unsignedBigInteger('ventaId');
            $table->unsignedBigInteger('productoId');
            $table->timestamps();

            //Cambiar la relacion de descuentos
//            $table->foreign('descuentoId')->references('id')->on('descuentos');

            $table->foreign('productoId')->references('id')->on('productos');
            $table->foreign('ventaId')->references('id')->on('ventas');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('detalle_productos');

    }
};
