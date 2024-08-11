<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\DetalleProducto;
use App\Models\Producto;
use App\Models\Venta;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Mail\CompraRealizada;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    //COMPRA DE LOS PRODUCTOS
    function crearCompra(Request $request)
    {
        // Inicia la transacción
        DB::beginTransaction();
        try {
            //Obtiene el usuario logeado
            $usuario = Auth::user();


            // Da de alta la venta
            $venta = Venta::create([
                'total' => $request->total,
                'fechaCreacion' => now(),
                //Compra en espera
                'estadoVenta' => null,
                'fechaVenta' => $request->fechaVenta,
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


            //SCRIPT PARA DESCONTAR DEL INVENTARIO.

            //Aregglo donde se guardaran los productos de los cuales no se tiene existencia suficiente
            $productosSinExistencia = [];
            //boleano para comprobar si un producto es insuficiente
            $noHay = false;

            $detalles = $venta->detalleProductos;

            foreach ($detalles as $detalle) {
                //Se obtiene el producto relacionado con el detalle
                $producto = $detalle->producto;

                // Se reduce el stock del producto en 1 unidad
                $producto->cantidadEnStock = $producto->cantidadEnStock - 1;

                //En caso de que la cantidad en stock de dicho producto sea igual a -1 o menor
                if($producto->cantidadEnStock < 0){
                    $noHay = true;
                    $productosSinExistencia[] = $producto;
//                    DB::rollBack();
                }else{
                    // Guardar los cambios en el producto
                    $producto->save();
                }

            }
            //de haber detectado que no hay exsitencia de uno o varios productos, el estado 500 lo maneja como un error
            if($noHay){
                DB::rollBack();
                return response()->json(['message' => 'Ha seleccionado una cantidad mayor a la de los productos en existencia en almacen, favor de verificar sus productos seleccionados'],500);
            }

            //Script para vacial el carrito del usuario
            //Se obtiene el carrito del usuario
            $carritoUsuario = $usuario->carrito;
            //Crea un carrito por vaciar y lo busca con el id del carrito del usuario
            $carritoPorVaciar = Carrito::find($carritoUsuario->id);

            //Elimina los registros del carrito por vaciar
            $carritoPorVaciar->productos()->detach();
             
            // Enviar correo al usuario
            Mail::to($usuario->email)->send(new CompraRealizada($venta));

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

            // Obtener los detalles de productos relacionados con esa venta
//            $detalles = $venta->detalleProductos;

            $venta->save();

//            foreach ($detalles as $detalle) {
//                // Obtener el producto relacionado con el detalle
//                $producto = $detalle->producto;
//
//                // Reducir el stock del producto en 1 unidad
//                $producto->cantidadEnStock = $producto->cantidadEnStock - 1;
//
//                // Guardar los cambios en el producto
//                $producto->save();
//            }

            DB::commit();
            return response()->json(['success' => 'Compra confirmada y stock actualizado'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    function rechazarCompra(Request $request, $id) {
        try {
            DB::beginTransaction();

            // Encontrar la venta por su ID
            $venta = Venta::find($id);

            $venta->estadoVenta = false;

            $venta->save();

           // Obtener los detalles de productos relacionados con esa venta
           $detalles = $venta->detalleProductos;

           foreach ($detalles as $detalle) {
                // Obtener el producto relacionado con el detalle
                $producto = $detalle->producto;

                // Aumetar el stock de los productos en 1 unidad
                $producto->cantidadEnStock = $producto->cantidadEnStock + 1;

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
