<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Producto;
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
    
    // ==========[ Obtener un producto por id ]==========
    public function obtenerProducto($id){
        $producto = Producto::find($id);
        if ($producto) {
            return response()->json($producto);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    // ==========[ Actualizar un producto ]==========
    public function actualizarProducto(Request $request, $id){
        $producto = Producto::find($id);

        if ($producto) {
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');

        if ($request->hasFile('imagenProducto')) {
            $producto->imagen = $request->file('imagenProducto')->store('imagenProducto', 'public');
        }

        $producto->save();

        return response()->json(['success' => 'Producto actualizado exitosamente']);
        } else {
        return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

// =============================================================================================

    // ==========[ Obtener todos los productos del carrito ]==========
    public function carritoIndex(){
        $user = Auth::user();
        $carrito = $user->carrito;
    
        if ($carrito) {
            $productos = $carrito->productos()->withPivot('id')->get();
            return response()->json($productos);
        } else {
            return response()->json(['error' => 'El usuario no tiene un carrito asociado'], 404);
        }
    }

    // ==========[ Agregar producto al carrito ]==========
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

    // ==========[ Eliminar un producto del carrito ]==========
    function carritoDelete($id){
        $user = Auth::user();
        $carrito = $user->carrito;
    
        if ($carrito) {
        // Asegurarse de eliminar la relación específica usando el id de la tabla pivote
        $carrito->productos()->wherePivot('id', $id)->detach();
            return response()->json(['success' => 'Producto eliminado del carrito']);
        } else {
            return response()->json(['error' => 'El carrito no existe'], 404);
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
