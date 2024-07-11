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
        Schema::create('product_has_inventarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Llaves foraneas
            $table->unsignedBigInteger('productoId');
            $table->foreign('productoId')->references('id')->on('productos');

            $table->unsignedBigInteger('inventarioId');
            $table->foreign('inventarioId')->references('id')->on('inventarios');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_has_inventarios');
    }
};
