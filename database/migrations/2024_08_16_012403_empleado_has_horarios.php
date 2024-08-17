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
        Schema::create('empleados_has_horarios', function (Blueprint $table) {//por cada dia de vacaciones se generara un registro de este
            $table->id();
            $table->unsignedBigInteger('empleadoId');
            $table->unsignedBigInteger('horarioId');
            $table->timestamps();

            $table->foreign('empleadoId')->references('id')->on('users');
            $table->foreign('horarioId')->references('id')->on('horarios');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleados_has_horarios', function (Blueprint $table) {
            $table->foreign('horarioId')->references('id')->on('horarios')->onDelete('cascade');
        });
    }
};
