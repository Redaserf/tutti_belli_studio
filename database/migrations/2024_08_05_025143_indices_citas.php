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
        Schema::table('citas_has_servicios', function (Blueprint $table) {
            $table->index('citaId');
            $table->index('servicioId');
            $table->index('tecnicaId');
        });

            Schema::table('detalle_tecnicas_productos', function (Blueprint $table) {
            $table->index('citaId');
            $table->index('tecnicaId');
            $table->index('productoId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('cita_has_servicios', function (Blueprint $table) {
            $table->dropIndex(['citaId']);
            $table->dropIndex(['servicioId']);
            $table->dropIndex(['tecnicaId']);
        });

        // Eliminar índices en la tabla detalle_tecnica_producto
        Schema::table('detalle_tecnica_producto', function (Blueprint $table) {
            $table->dropIndex(['citaId']);
            $table->dropIndex(['tecnicaId']);
            $table->dropIndex(['productoId']);
        });
    }
};
