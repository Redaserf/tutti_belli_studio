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
        Schema::create('materiales_usados', function(Blueprint $table){

            $table->id();
            $table->double('cantidadMateriales');
            $table->unsignedBigInteger('productoId');
            $table->unsignedBigInteger('tecnicaId');
            $table->timestamps();

            $table->foreign('productoId')->references('id')->on('productos');
            $table->foreign('tecnicaId')->references('id')->on('tecnicas');

            

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
