<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Mail\NuevaFecha;
use App\Models\Curso;
use App\Models\DiaCurso;
use Carbon\Carbon;
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

            // Obtener las fechas y horas existentes para el curso
            $fechasExistentes = DiaCurso::where('cursoId', $curso->id)
                ->orderBy('fechaContinuacion', 'desc')
                ->orderBy('horaContinuacion', 'desc')
                ->first();

            $nuevaFechaHora = Carbon::parse($request->fecha . ' ' . $request->hora);

            // Validar que la nueva fecha y hora no sean anteriores a la última registrada
            if ($fechasExistentes) {
                $ultimaFechaHora = Carbon::parse($fechasExistentes->fechaContinuacion . ' ' . $fechasExistentes->horaContinuacion);

                if ($nuevaFechaHora->lt($ultimaFechaHora)) {
                    return 'La nueva fecha y hora no pueden ser anteriores a las registradas ';
                }
            }

            // Validar que la nueva fecha y hora no sean anteriores a la fecha y hora de inicio del curso
            $fechaHoraInicioCurso = Carbon::parse($curso->fechaInicio . ' ' . $curso->horaInicio);

            if ($nuevaFechaHora->lt($fechaHoraInicioCurso)) {
                return 'La nueva fecha y hora no pueden ser anteriores a la fecha y hora del inicio del curso';
            }

            // Crear la nueva fecha
            $nuevoDia = DiaCurso::create([
                'fechaContinuacion' => $request->fecha,
                'horaContinuacion' => $request->hora,
                'cursoId' => $curso->id
            ]);

            // Enviar correos a los usuarios inscritos
            $inscripciones = $curso->inscripciones;

            foreach ($inscripciones as $inscripcion) {
                $usuario = $inscripcion->usuarios;
                Mail::to($usuario->email)->send(new NuevaFecha($curso, $nuevoDia));
            }

            DB::commit();
            return 'Día creado con éxito';
        } catch (\Exception $e) {
            DB::rollBack();
            return 'error en ejecucion';
        }
    }

}
