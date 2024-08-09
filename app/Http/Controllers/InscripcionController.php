<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Inscripcion;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    public function inscribirse(Request $request)
    {
        $request->validate([
            'cursoId' => 'required|exists:cursos,id',
        ]);

        $inscripcion = Inscripcion::create([
            'fechaInscripcion' => now(),
            'estado' => false,
            'usuarioId' => Auth::id(),
            'cursoId' => $request->cursoId,
        ]);

        return response()->json(['success' => true, 'message' => 'Inscripción realizada con éxito.']);
    }

    public function getInscripciones($cursoId)
    {
    $inscripciones = Inscripcion::where('cursoId', $cursoId)->with('usuarios')->get();
    $curso = Curso::find($cursoId);

    return response()->json(['inscripciones' => $inscripciones, 'curso' => $curso]);
    }

    public function index($inscripcionId)
    {
        $inscripcion = Inscripcion::where('id', $inscripcionId)->with('usuarios')->first();
        return response()->json($inscripcion);
    }

    public function actualizarInscripcion(Request $request, $id){

        DB::beginTransaction();
        try{

            //Busca la inscripcion mediante su id
            $inscripcion = Inscripcion::find($id);

            // Obtenemos el curso relacionado con la inscripción
            $curso = $inscripcion->cursos;

            //Comprobamos que el cupo limite del curso sea mayor a 0
            // Obtenemos los registros de la tabla pivote productosHasCurso para ese curso
            $productosHasCurso = $curso->productoHasCurso;


            //Cramos variable para comprobar si en algun producto la cantidad a descontar es mayor al stock
            $comprobar = true;

            //ciclo de comprobacion
            foreach ($productosHasCurso as $productoCurso) {
                // Obtenemos el producto relacionado
                $producto = Producto::find($productoCurso->productoId);

                if ($producto->cantidadEnStock < $productoCurso->cantidadPorUsar) {
                    $comprobar = false;
                    return 'NO HAY SUFICIENTE MATERIAL PARA ACEPTAR ESTA INSCIPCION';


                }

            }

            if ($comprobar) {
                foreach ($productosHasCurso as $productoCurso) {
                    // Obtenemos el producto relacionado
                    $producto = Producto::find($productoCurso->productoId);

                    // Actualizamos la cantidad en stock
                    $producto->cantidadEnStock -= $productoCurso->cantidadPorUsar;
                    $producto->save();

                    $curso->cupoLimite = $curso->cupoLimite - 1;
                    $curso->save();
                    $inscripcion->estado = true;
                    $inscripcion->save();

                }

                DB::commit();
            }


        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['error' => $e ], 500);
        }

    }
}
