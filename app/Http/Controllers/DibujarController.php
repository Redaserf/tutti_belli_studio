<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Producto;
use App\Models\Tecnica;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DibujarController extends Controller
{
// =============================================================================================

    // ==========[ Obtener todos los productos ]==========
    function productosIndex(){
    $productos = Producto::all();
    return response()->json($productos);
    }

    // ==========[ Eliminar un producto ]==========
    function productoDelete($id){
    Producto::findOrFail($id)->delete();
    return response()->json(null, 204);
    }

    // ==========[ obtener los productos sin descuento ]==========
    function productoSinDescuento()
    {
        $productos = Producto::where('descuentoId', '=', null)
            ->where('inventarioId', '=', 1)
            ->get();
        return response()->json($productos);
    }

    // ==========[ obtener los productos con descuento ]==========
    function productosConDescuento()
    {
        $productos = Producto::where('descuentoId', '>', 0)
            ->where('inventarioId', '=', 1)
            ->with(['inventario', 'descuento'])
            ->get();
        return response()->json($productos);

    }

// =============================================================================================



// =============================================================================================

    // ==========[ Obtener todos los productos del carrito ]==========
    function carritoIndex(){
    $productos = Carrito::all();
    return response()->json($productos);
    }

    function carritoAgregar(Request $request){
        try {
            $user = Auth::user();
            $productId = $request->input('productId');
            $producto = Producto::find($productId);

            if ($producto) {
                $carrito = $user->carrito;

                if (!$carrito) {
                    $carrito = Carrito::create([
                        'usuarioId' => $user->id,
                        'costoTotal' => 0,
                    ]);
                }

                // Agregar el producto al carrito
                $carrito->productos()->attach($producto->id);

                // Actualizar el costo total del carrito
                $carrito->costoTotal += $producto->precio;
                $carrito->save();

                return response()->json(['success' => 'Producto agregado al carrito']);
            } else {
                return response()->json(['error' => 'Producto no encontrado'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error al agregar producto al carrito: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al agregar el producto al carrito'], 500);
        }
    }

// =============================================================================================

    // ==========[ Obtener todos los empleados ]==========
    function employeeIndex(){
    $empleados = User::where('rolId', 3)->get();
    return response()->json($empleados);
    }

    // ==========[ Eliminar un empleado ]==========
    function employeeDelete($id){
    User::findOrFail($id)->delete();
    return response()->json(null, 204);
    }

// =============================================================================================


}
