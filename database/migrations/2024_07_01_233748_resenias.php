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
        Schema::create('resenias', function(Blueprint $table){

            $table->id();
            $table->integer('cantidadEstrellas');
            $table->longText('comentario');
            $table->dateTime('fechaResenia');
            $table->unsignedBigInteger('citaId');
            $table->timestamps();

            $table->foreign('citaId')->references('id')->on('citas');

            

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('resenias');

    }
};
