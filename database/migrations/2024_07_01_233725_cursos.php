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
        Schema::create('cursos', function(Blueprint $table){

            $table->id();
            $table->string('nombre');
            $table->integer('cupoLimite');
            $table->date('fechaInicio');
            $table->time('horaInicio');
            $table->boolean('activo')->default(1);
            $table->double('precio');
            $table->string('imagen');
            $table->longText('descripcion');
            $table->unsignedBigInteger('empleadoId')->nullable();
            $table->unsignedBigInteger('descuentoId')->nullable();
            $table->timestamps();



            $table->foreign('empleadoId')->references('id')->on('users');
            $table->foreign('descuentoId')->references('id')->on('descuentos');




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cursos');

    }
};
