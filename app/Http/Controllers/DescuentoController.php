<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Descuento;
use App\Models\Tecnica;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function aplicarDescuento(Request $request)
    {
        $descuentoId = $request->input('descuentoId');
        $tecnicas = $request->input('tecnicas');

        $request->validate([
            'descuentoId' => 'required|exists:descuentos,id',
            'tecnicas' => 'required|array',
            'tecnicas.*' => 'exists:tecnicas,id',
            'cantidadDescuento' => 'required|numeric|min:0|max:100', // Validar que el descuento sea un porcentaje válido
        ]);

        // Convertir el porcentaje de descuento a un valor decimal
        $porcentajeDescuento = $request->cantidadDescuento / 100;

        foreach ($tecnicas as $tecnicaId) {
            $tecnica = Tecnica::find($tecnicaId);
            if ($tecnica) {
                // Aplicar el descuento al precio actual
                $precioActual = $tecnica->precio;
                $cantidadRestar = $precioActual * $porcentajeDescuento;
                $nuevoPrecio = $precioActual - $cantidadRestar;

                // Actualizar el precio de la técnica y el ID del descuento
                $tecnica->precio = $nuevoPrecio;
                $tecnica->descuentoId = $descuentoId;
                $tecnica->save();
            }
        }

        return response()->json(['success' => 'Descuento aplicado exitosamente.']);
    }
}
