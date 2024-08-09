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
        Schema::create('ventas', function(Blueprint $table){

            $table->id();
            $table->double('total');
            $table->date('fechaVenta');
            $table->date('fechaCreacion')->nullable();
            $table->boolean('estadoVenta')->nullable();
            // checar atributo estatus faltante en el diagrama

            $table->unsignedBigInteger('usuarioId')->nullable();
            $table->timestamps();

            $table->foreign('usuarioId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('ventas');

    }
};
