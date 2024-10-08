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
        Schema::create('vacaciones', function (Blueprint $table) {//por cada dia de vacaciones se generara un registro de este
            $table->id();
            $table->date('fechaInicio');
            $table->string('motivo', 250)->default('vacaciones');
            $table->unsignedBigInteger('empleadoId');
            $table->timestamps();

            $table->foreign('empleadoId')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacaciones');
    }
};
