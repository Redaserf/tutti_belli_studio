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
        Schema::create('usuarios', function(Blueprint $table){

            $table->id();
            $table->string('nombre', 70);
            $table->string('apellidoPaterno', 50);
            $table->string('apellidoMaterno', 50);
            $table->string('contrasenia', 30);
            $table->binary('fotoPerfil');
            $table->string('correo', 45);
            $table->string('numeroTelefono', 10);
            $table->unsignedBigInteger('rolId');
            $table->timestamps();


            $table->foreign('rolId')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('usuarios');

    }
};
