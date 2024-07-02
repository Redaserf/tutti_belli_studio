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
        Schema::create('tecnicas_has_cursos', function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('tecnicaId');
            $table->unsignedBigInteger('cursoId');
            $table->timestamps();

            $table->foreign('cursoId')->references('id')->on('cursos');
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
