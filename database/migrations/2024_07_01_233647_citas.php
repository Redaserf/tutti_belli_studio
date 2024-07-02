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

        Schema::create('citas', function(Blueprint $table){

            $table->id();
            $table->date('fechaCita');
            $table->time('horaCita');
            $table->boolean('estadoCita');
            $table->string('notasCita', 150);
            $table->unsignedBigInteger('usuarioId');
            $table->unsignedBigInteger('empleadoId');
            $table->timestamps();
            
            $table->foreign('usuarioId')->references('id')->on('usuarios');
            $table->foreign('empleadoId')->references('id')->on('usuarios');

        });
        $table->timestamps();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('citas');

    }
};
