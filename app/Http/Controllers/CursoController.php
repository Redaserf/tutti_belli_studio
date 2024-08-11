<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    function dibujarProductos($id)
    {
        // Encuentra el curso por su ID
        $curso = Curso::find($id);

        // Recupera todos los registros de ProductoHasCurso relacionados con el curso, incluyendo el producto asociado
        $productosHasCurso = $curso->productoHasCurso()->with('producto')->get();

        // Mapea los productos, agregando cantidadPorUsar como parte del array del producto
        $productos = $productosHasCurso->map(function ($productoHasCurso) {
            $producto = $productoHasCurso->producto;
            $producto['cantidadPorUsar'] = $productoHasCurso->cantidadPorUsar;
            return $producto;
        });

        // Devuelve los productos con la cantidadPorUsar incluida en el JSON
        return response()->json($productos);
    }
}
