<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\DetalleProducto;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    function crearCompra(Request $request)
    {
        // Inicia la transacción
        DB::beginTransaction();
        try {
            $usuario = Auth::user();


            // Da de alta la venta
            $venta = Venta::create([
                'total' => $request->total,
                'fechaVenta' => $request->fechaVenta,
                'estadoVenta' => false,
                'usuarioId' => $usuario->id
            ]);

            // Arreglo que recorre los productos comprados
            for ($i = 0; $i < count($request->productosComprados); $i++) {
                DetalleProducto::create([
                    // Llena cada key con el valor correspondiente del arreglo buscándolo por la key misma
                    'nombre' => $request->productosComprados[$i]['nombre'],
                    'descripcion' => $request->productosComprados[$i]['descripcion'],
                    'precio' => $request->productosComprados[$i]['precio'],
                    'ventaId' => $venta->id,
                    'productoId' => $request->productosComprados[$i]['id']
                ]);
            }
            //Script para vacial el carrito del usuario
            //Obtiene el carrito del usuario
            $carritoUsuario = $usuario->carrito;
            //Crea un carrito por vaciar y lo busca con el id del carrito del usuario
            $carritoPorVaciar = Carrito::find($carritoUsuario->id);

            //Elimina los registros del carrito por vaciar
            $carritoPorVaciar->productos()->detach();

            DB::commit();

        } catch (\Exception $e) {
            // Si ocurre algún error, revierte la transacción
            DB::rollBack();

            return response()->json(['error' => $e ], 500);
        }
    }

    function confirmarCompra(Request $request, $id) {
        try {
            DB::beginTransaction();

            // Encontrar la venta por su ID
            $venta = Venta::find($id);
            $venta->estadoVenta = true;

            if (!$venta) {
                return response()->json(['error' => 'Venta no encontrada'], 404);
            }

            // Obtener los detalles de productos relacionados con esa venta
            $detalles = $venta->detalleProductos;

            foreach ($detalles as $detalle) {
                // Obtener el producto relacionado con el detalle
                $producto = $detalle->producto;

                // Reducir el stock del producto en 1 unidad
                $producto->cantidadEnStock -= 1;

                // Guardar los cambios en el producto
                $producto->save();
            }

            DB::commit();
            return response()->json(['success' => 'Compra confirmada y stock actualizado'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
