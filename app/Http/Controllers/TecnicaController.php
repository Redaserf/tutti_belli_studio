<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductoHasTecnica;
use App\Models\Tecnica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TecnicaController extends Controller
{
    function index(){
        return response()->json(Tecnica::all());
    }

    public function show($servicioId)
    {
        $tecnicas = Tecnica::where('servicioId', $servicioId)->get();
        return response()->json($tecnicas);
    }

    public function index2($tecnicaId)
    {
        $tecnica = Tecnica::find($tecnicaId);
        return response()->json($tecnica);
    }

    public function actualizarTecnica(Request $request, $id){
        $tecnica = Tecnica::find($id);

        if ($tecnica) {
        $tecnica->nombre = $request->input('nombre');
        $tecnica->precio = $request->input('precio');
        $tecnica->descripcion = $request->input('descripcion');

        $tecnica->save();

        return response()->json(['success' => 'Técnica actualizada con éxito']);
        } else {
        return response()->json(['error' => 'Técnica no encontrada'], 404);
        }
    }

    public function borrarTecnica($id) {
        $tecnica = Tecnica::find($id);

        if ($tecnica) {
            $tecnica->productosTecnica2()->detach();
            $tecnica->delete();
    
            return response()->json(['success' => 'Técnica eliminada correctamente.']);
        } else {
            return response()->json(['error' => 'Técnica no encontrada'], 404);
        }
    }

    // ==========[ obtener las tecnicas sin descuento ]==========
    function tecnicaSinDescuento()
    {
        $tecnicas = Tecnica::where('descuentoId', '=', null)
            ->with(['servicios'])
            ->get();
        return response()->json($tecnicas);

    }

    // ==========[ obtener las tecnicas con descuento ]==========
    function tecnicaConDescuento()
    {
        $tecnicas = Tecnica::where('descuentoId', '>', 0)
            ->with(['servicios', 'descuento'])
            ->get();
        return response()->json($tecnicas);
    }

    function guardar(Request $request)
    {
        DB::beginTransaction();
        try {
            $arregloProductos = $request->arregloProductos;
            $arregloCantidadesProducto = $request->arregloCantidades;
            //$arregloProductos = json_decode($request->arregloProductos, true);
            //$arregloCantidadesProducto = json_decode($request->arregloCantidades, true);
            $tecnicaData = $request->tecnica;

            // Añadir el ID del servicio a los datos de la técnica
            $tecnicaData['servicioId'] = $request->servicioId;

            $tecnicaData = [
                'nombre' => $request->tecnica['nombre'],
                'precio' => (double) $request->tecnica['precio'],
                'descripcion' => $request->tecnica['descripcion'],
                'servicioId' => (int) $request->servicioId
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
            return response()->json(['message' => 'técnica creadas con éxito']);
        }catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => 'Error al crear la tecnica'], 500);
        }

    }
}
