<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tecnica;
use Illuminate\Http\Request;

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
            $tecnica->productos()->detach();
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
}
