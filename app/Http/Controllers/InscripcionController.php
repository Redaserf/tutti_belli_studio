<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\DetalleInscripcion;
use App\Models\Inscripcion;
use App\Models\Producto;
use App\Models\Reporte;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscripcionAceptada;
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
        $inscripciones = Inscripcion::where('cursoId', $cursoId)->whereNotNull('estado')->with('usuarios')->get();
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
            if($curso->cupoLimite > 0){
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
                        $producto->cantidadEnStock -=  $productoCurso->cantidadPorUsar;
                        $producto->save();


                    }

                    $curso->cupoLimite = $curso->cupoLimite - 1;
                    $curso->save();
                    $inscripcion->estado = true;
                    $inscripcion->save();

                    // Verificar que el usuario no sea null antes de intentar enviar el correo
                    if ($inscripcion->estado == 1 && $inscripcion->usuarios) { // 1 representa 'Aceptado'
                        Mail::to($inscripcion->usuarios->email)->send(new InscripcionAceptada($inscripcion->usuarios, $inscripcion));
                    }

                    //Crear venta
                    $usuario = Auth::user();

                    $reporte = Reporte::create([
                        'esActivo' => true
                    ]);
//
//                    $reporte = Reporte::create([
//                        "usuarioId" => $usuario->id
//                    ]);

//                    if(!$reporte){
//                        return 'no hay reporte';
//                    }

                    $venta = Venta::create([
                        'total' => $curso->precio,
                        'tipoVenta'=> 'inscripcion',
                        'estadoVenta' => true,
                        'reporteId' => $reporte->id,
                        'fechaVenta' => now(),
                        'empleadoId' => 2,
                        'usuarioId' => $usuario->id
                    ]);

                    if(!$venta){
                        return 'no hay $venta';
                    }


                     $detalle = DetalleInscripcion::create([
                        'ventaId' => $venta->id,
                        'inscripcionId' => $inscripcion->id,
                    ]);

                    if(!$detalle){
                        return 'no hay detalle';
                    }

                    DB::commit();
                    return 'Inscripcion contretada correctamente';
                }

            }else{
                return 'Ya no hay cupos para este curso';
            }



        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['error' => $e->getMessage() ], 500);
        }

    }

    public function rembolsarInscripcion(Request $request, $id){
        DB::beginTransaction();
        try{

            $inscripcion = Inscripcion::find($id);
            $curso = $inscripcion->cursos;
            $productosHasCurso = $curso->productoHasCurso;

                foreach ($productosHasCurso as $productoCurso) {

                    $producto = Producto::find($productoCurso->productoId);
                    $producto->cantidadEnStock = $producto->cantidadEnStock + $productoCurso->cantidadPorUsar;
                    $producto->save();

                }

                $curso->cupoLimite = $curso->cupoLimite + 1;
                $curso->save();
                $inscripcion->estado = false;
                $inscripcion->save();

            $detalles = $inscripcion->detalleInscripciones;

            foreach ($detalles as $detalle) {

                $venta = $detalle->venta;


                $detalle->delete();


                if ($venta->detalleInscripciones()->count() == 0) {
                    $venta->delete();
                }
            }

                DB::commit();

        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['error' => $e->getMessage() ], 500);
        }
    }

    public function eliminarInscripcion($inscripcionId){
        DB::beginTransaction();
        try{
            $inscripcion = Inscripcion::find($inscripcionId);

            if (!$inscripcion) {
                return response()->json(['error' => 'Inscripción no encontrada.'], 404);
            }

            $inscripcion->estado = null;
            $inscripcion->save();
            // $inscripcion->delete();

            DB::commit();
            return response()->json(['success' => 'Inscripción eliminada exitosamente'], 200);
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['error' => 'Error al eliminar la inscripción: ' . $e->getMessage()], 500);
        }
    }

    public function eliminarInscripcionReal($inscripcionId){
        DB::beginTransaction();
        try{
            $inscripcion = Inscripcion::find($inscripcionId);

            if (!$inscripcion) {
                return response()->json(['error' => 'Inscripción no encontrada.'], 404);
            }

            // $inscripcion->estado = null;
            // $inscripcion->save();
            $inscripcion->delete();

            DB::commit();
            return response()->json(['success' => 'Inscripción eliminada exitosamente'], 200);
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['error' => 'Error al eliminar la inscripción: ' . $e->getMessage()], 500);
        }
    }
}
