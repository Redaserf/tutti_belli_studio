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
        Schema::create('citas_has_servicios', function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('citaId');
            $table->unsignedBigInteger('servicioId');
            $table->unsignedBigInteger('tecnicaId');
            $table->timestamps();


            $table->foreign('citaId')->references('id')->on('citas');
            $table->foreign('servicioId')->references('id')->on('servicios');
            $table->foreign('tecnicaId')->references('id')->on('tecnicas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('citas_has_servicios');

    }
};
