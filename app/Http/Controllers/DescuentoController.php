<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Descuento;
use App\Models\Producto;
use App\Models\Tecnica;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function aplicarDescuento(Request $request)
    {
        $descuentoId = $request->input('descuentoId');
        $tecnicas = $request->input('tecnicas');


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

    //descuento en productos

    public function aplicarDescuentoProducto(Request $request)
    {
        $descuentoId = $request->input('descuentoId');
        $productos = $request->input('productos');

//        $request->validate([
//            'descuentoId' => 'required|exists:descuentos,id',
//            'tecnicas' => 'required|array',
//            'tecnicas.*' => 'exists:tecnicas,id',
//            'cantidadDescuento' => 'required|numeric|min:0|max:100', // Validar que el descuento sea un porcentaje válido
//        ]);

        // Convertir el porcentaje de descuento a un valor decimal
        $porcentajeDescuento = $request->cantidadDescuento / 100;

        foreach ($productos as $productoId) {
            $producto = Producto::find($productoId);
            if ($producto) {
                // Aplicar el descuento al precio actual
                $precioActual = $producto->precio;
                $cantidadRestar = $precioActual * $porcentajeDescuento;
                $nuevoPrecio = $precioActual - $cantidadRestar;

                // Actualizar el precio de la técnica y el ID del descuento
                $producto->precio = $nuevoPrecio;
                $producto->descuentoId = $descuentoId;
                $producto->save();
            }
        }

        return response()->json(['success' => 'Descuento aplicado exitosamente.']);
    }

    function eliminarDescuentoProducto(Request $request , $id){
        $producto = Producto::find($id);

        $precioActual = $producto->precio;

        $porcentajeDescuento = $producto->descuento->cantidadDescuento;
        $porcentajeTotalActual  = 100 - $porcentajeDescuento;
        $precioNuevo = ($precioActual / $porcentajeTotalActual) * 100;

        $producto->precio = $precioNuevo;
        $producto->descuentoId = null;

        $producto->save();


    }

    function eliminarDescuentoTecnica(Request $request , $id){
        $tecnica = Tecnica::find($id);

        $precioActual = $tecnica->precio;

        $porcentajeDescuento = $tecnica->descuento->cantidadDescuento;
        $porcentajeTotalActual  = 100 - $porcentajeDescuento;
        $precioNuevo = ($precioActual / $porcentajeTotalActual) * 100;

        $tecnica->precio = $precioNuevo;
        $tecnica->descuentoId = null;

        $tecnica->save();


    }
}
