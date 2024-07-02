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
        Schema::create('cuidados', function(Blueprint $table){

            $table->id();
            $table->longText('descripcion');
            $table->boolean('confirmacionEnvio');
            $table->dateTime('fechaConfirmacion');
            $table->dateTime('fechaUltimaVisualizacion');
            $table->unsignedBigInteger('tecnicaId');
            $table->timestamps();

            $table->foreign('tecnicaId')->references('id')->on('tecnicas');

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cuidados');

    }
};
