<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Mail\NuevaFecha;
use App\Models\Curso;
use App\Models\DiaCurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    function diaInicial ($id)
    {
        $curso = Curso::find($id);

        $fechasCurso = DiaCurso::where('cursoId', $curso->id)->get();

        return response()->json(['curso' => $curso, 'dias' => $fechasCurso]);
    }

    function nuevaFecha(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $curso = Curso::find($id);



            $nuevoDia = DiaCurso::create([
                'fechaContinuacion' => $request->fecha,
                'horaContinuacion' => $request->hora,
                'cursoId' => $curso->id
            ]);

            $inscripciones = $curso->inscripciones;


            foreach ($inscripciones as $inscripcion) {
                $usuario = $inscripcion->usuarios;
                Mail::to($usuario->email)->send(new NuevaFecha($curso, $nuevoDia));
            }

            DB::commit();
            return response()->json(['success' => 'Día creado con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Error en la creación del día', 'details' => $e->getMessage()], 500);
        }
    }



}
