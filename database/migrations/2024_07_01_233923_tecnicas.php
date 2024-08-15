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
        Schema::create('tecnicas', function(Blueprint $table){

            $table->id();
            $table->string('nombre');
            $table->double('precio');
            $table->double('precioAntiguo')->nullable();
            $table->longText('descripcion');
            $table->unsignedBigInteger('servicioId');
            $table->unsignedBigInteger('descuentoId')->nullable();
            $table->timestamps();

            $table->foreign('servicioId')->references('id')->on('servicios');
            $table->foreign('descuentoId')->references('id')->on('descuentos');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tecnicas');

    }
};
