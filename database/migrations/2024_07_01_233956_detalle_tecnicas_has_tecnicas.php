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
        Schema::create('detalle_tecnicas_has_tecnicas', function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('detalleTecnicaId');
            $table->unsignedBigInteger('tecnicaId');
            $table->timestamps();

            $table->foreign('detalleTecnicaId')->references('id')->on('detalle_tecnicas');
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
