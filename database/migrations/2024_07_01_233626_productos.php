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
        Schema::create('productos', function(Blueprint $table){

            $table->id();
            $table->string('nombre');
            $table->double('precio');
            $table->integer('cantidadEnStock');
            $table->integer('cantidadReserva')->default(0);
            $table->string('imagen');
            $table->string('descripcion');
            $table->unsignedBigInteger('inventarioId');
            $table->unsignedBigInteger('descuentoId')->nullable();
            $table->timestamps();

            $table->foreign('inventarioId')->references('id')->on('inventarios');
            $table->foreign('descuentoId')->references('id')->on('descuentos');





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('productos');


    }
};
