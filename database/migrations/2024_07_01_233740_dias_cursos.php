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
        Schema::create('dias_cursos', function(Blueprint $table){

            $table->id();
            $table->date('fechaContinuacion');
            $table->Time('horaContinuacion');
            $table->unsignedBigInteger('cursoId');
            $table->timestamps();

            $table->foreign('cursoId')->references('id')->on('cursos');



        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('dias_cursos');

    }
};
