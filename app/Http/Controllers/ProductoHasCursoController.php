<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductoHasCurso;

class ProductoHasCursoController extends Controller
{
    public function store(Request $request){
        $cursoId = $request->input('cursoId');
        $productos = $request->input('productos');
        $cantidades = $request->input('cantidades');

        // Borrar cualquier relación existente para este curso
        ProductoHasCurso::where('cursoId', $cursoId)->delete();

        // Guardar las nuevas relaciones en la tabla pivote
        foreach ($productos as $index => $productoId) {
            ProductoHasCurso::create([
                'cursoId' => $cursoId,
                'productoId' => $productoId,
                'cantidadPorUsar' => $cantidades[$index]
            ]);
        }

        return response()->json(['message' => 'Curso guardado exitosamente'], 200);
    }
}
