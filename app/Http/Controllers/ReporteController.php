<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reporte;
use App\Models\Venta;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    //traer todos los registros del registro con estado activo
    public function parcialActual(){
        $reporte = Reporte::where('esActivo', true)->first();

        if($reporte) {
            $ventas = Venta::where('reporteId', $reporte->id)
                ->where('estadoVenta', true)
                ->get(); // obtener las ventas como colección

            return response()->json($ventas);
        }

        return response()->json([]);
    }
}
