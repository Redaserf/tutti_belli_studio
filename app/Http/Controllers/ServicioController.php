<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductoHasTecnica;
use App\Models\Servicio;
use App\Models\Tecnica;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    function index(){
        $servicios = Servicio::all();
        return response()->json($servicios);
    }

    public function index2($id)
    {

        try {
            $servicio = Servicio::findOrFail($id);
            return response()->json($servicio);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Servicio no encontrado', 'error' => $e->getMessage()], 404);
        }
    }

    public function borrarServicio($id) {
        DB::beginTransaction();
        try {
            $servicio = Servicio::findOrFail($id);
            $servicio->delete();

            DB::commit();
            return response()->json(['success' => 'Servicio eliminado con éxito']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => 'Error al eliminar el servicio, primero elimina sus técnicas.', 'error' => $e->getMessage()], 500);
        }
    }

    public function actualizarServicio(Request $request, $id){
        DB::beginTransaction();
        try{
            $servicio = Servicio::find($id);

            $servicio->nombre = $request->input('nombre');

            $servicio->save();
            DB::commit();
            return response()->json(['success' => 'Servicio actualizado con éxito']);
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['error' => 'Servicio no encontrado'], 404);
        }

    }

    function crear(Request $request){

        DB::beginTransaction();

        try {
            // Crear el servicio
            $servicio = Servicio::create([
                "nombre" => $request->nombreServicio,  // Corregir nombre de la variable
            ]);


            $arregloProductos = $request->arregloProductos;
            $arregloCantidadesProducto = $request->arregloCantidades;
            //$arregloProductos = json_decode($request->arregloProductos, true);
            //$arregloCantidadesProducto = json_decode($request->arregloCantidades, true);
            $tecnicaData = $request->tecnica;

            // Añadir el ID del servicio a los datos de la técnica
            $tecnicaData['servicioId'] = $servicio->id;

            $tecnicaData = [
                'nombre' => $request->tecnica['nombre'], // string
                'precio' => (double)$request->tecnica['precio'], // float
                'descripcion' => $request->tecnica['descripcion'], // string
                'servicioId' => (int)$servicio->id // integer
            ];

            // Crear la técnica con todos los datos necesarios
            $tecnica = Tecnica::create($tecnicaData);

            // Relacionar productos con la técnica
            for ($i = 0; $i < count($arregloProductos); $i++) {
                ProductoHasTecnica::create([
                    'productoId' => $arregloProductos[$i],
                    'tecnicaId' => $tecnica->id,  // Usar el ID de la técnica creada
                    'cantidadDeUso' => $arregloCantidadesProducto[$i],
                ]);
            }

            DB::commit();

            return response()->json(['message' => 'Servicio y técnicas creadas con éxito']);

        } catch (\Exception $e) {
            // Si ocurre algún error, revierte la transacción
            DB::rollBack();

            // Maneja el error según sea necesario, puedes lanzar una excepción o devolver una respuesta de error
            return response()->json(['error' => 'Hubo un problema al crear el servicio y la técnica.'], 500);
        }
    }

}
