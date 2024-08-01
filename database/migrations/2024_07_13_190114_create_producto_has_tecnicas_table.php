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
        Schema::create('producto_has_tecnicas', function (Blueprint $table) {
            $table->id();

            //Llaves foraneas
            $table->unsignedBigInteger('tecnicaId');
            $table->unsignedBigInteger('productoId');
            $table->integer('cantidadDeUso');
            $table->timestamps();

            $table->foreign('tecnicaId')->references('id')->on('tecnicas');
            $table->foreign('productoId')->references('id')->on('productos');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_has_tecnicas');
    }
};
