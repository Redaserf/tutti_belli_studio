<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reporte;
use App\Models\Venta;
use Barryvdh\DomPDF\Facade\Pdf;
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

    //Pdf

    public function PdfCero(Request $request){

        $fechaInicio = $request->fechaInicio;
        $fechaFin = $request->fechaFin;



        //con wherebewtween e busca entre los valores
        // $ventas = Venta::with('empleadoVenta')->whereBetween('fechaVenta', [$fechaInicio, $fechaFin])->get();

        $ventas = Venta::with(['empleadoVenta' => function($query) {
            $query->select('id', 'name'); // 'id' es el empleadoId, y 'name' es el nombre del empleado
        }])
            ->whereBetween('fechaVenta', [$fechaInicio, $fechaFin])
            ->whereNotNull('empleadoId') // Excluir ventas con empleadoId nulo
            ->get();


        $ventas = $ventas->map(function($venta) {
            return [
                'id' => $venta->id,
                'tipoVenta' => $venta->tipoVenta,
                'fechaVenta' => $venta->fechaVenta,
                'empleadoId' => $venta->empleadoId,
                'empleadoNombre' => $venta->empleadoVenta->name ?? null,
                'total'=> $venta->total

            ];
        });

        $pdf = PDF::loadView('Pdf.Reporte', compact('ventas'));
        return $pdf->stream('Reporte.pdf');
    }

    public function PdfUno(Request $request){

        $fechaInicio = $request->fechaInicio;
        $fechaFin = $request->fechaFin;

        $ventas = Venta::with(['empleadoVenta' => function($query) {
            $query->select('id', 'name');
        }])
            ->where('empleadoId', $request->empleadoSeleccionado)
            ->where('tipoVenta', $request->ventaSeleccionada)
            ->whereBetween('fechaVenta', [$fechaInicio, $fechaFin])
            ->get();


        $ventas = $ventas->map(function($venta) {
            return [
                'id' => $venta->id,
                'tipoVenta' => $venta->tipoVenta,
                'fechaVenta' => $venta->fechaVenta,
                'empleadoId' => $venta->empleadoId,
                'empleadoNombre' => $venta->empleadoVenta->name ?? null,
                'total'=> $venta->total
            ];
        });

        $pdf = PDF::loadView('Pdf.Reporte', compact('ventas'));
        return $pdf->stream('Reporte.pdf');

    }

    public function PdfDos(Request $request){

        $fechaInicio = $request->fechaInicio;
        $fechaFin = $request->fechaFin;

        $ventas = Venta::with(['empleadoVenta' => function($query) {
            $query->select('id', 'name');
        }])
            ->where('empleadoId', $request->empleadoSeleccionado)
            ->whereBetween('fechaVenta', [$fechaInicio, $fechaFin])
            ->get();


        $ventas = $ventas->map(function($venta) {
            return [
                'id' => $venta->id,
                'tipoVenta' => $venta->tipoVenta,
                'fechaVenta' => $venta->fechaVenta,
                'empleadoId' => $venta->empleadoId,
                'empleadoNombre' => $venta->empleadoVenta->name ?? null,
                'total'=> $venta->total
            ];
        });
        $pdf = PDF::loadView('Pdf.Reporte', compact('ventas'));
        return $pdf->stream('Reporte.pdf');
    }

    public function PdfTres(Request $request){
        $fechaInicio = $request->fechaInicio;
        $fechaFin = $request->fechaFin;

        $ventas = Venta::with(['empleadoVenta' => function($query) {
            $query->select('id', 'name');
        }])
            ->where('tipoVenta', $request->ventaSeleccionada)
            ->whereBetween('fechaVenta', [$fechaInicio, $fechaFin])
            ->get();


        $ventas = $ventas->map(function($venta) {
            return [
                'id' => $venta->id,
                'tipoVenta' => $venta->tipoVenta,
                'fechaVenta' => $venta->fechaVenta,
                'empleadoId' => $venta->empleadoId,
                'empleadoNombre' => $venta->empleadoVenta->name ?? null,
                'total'=> $venta->total
            ];
        });
        $pdf = PDF::loadView('Pdf.Reporte', compact('ventas'));
        return $pdf->stream('Reporte.pdf');
    }

}
