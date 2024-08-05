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
        Schema::create('producto_has_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cursoId');
            $table->unsignedBigInteger('productoId');
            $table->integer('cantidadPorUsar');
            $table->timestamps();

            $table->foreign('cursoId')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('productoId')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_has_cursos');
    }
};
