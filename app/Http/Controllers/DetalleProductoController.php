<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetalleProducto;
use App\Models\Venta;
use Illuminate\Http\Request;

class DetalleProductoController extends Controller
{
    function comprasIndex(){
        $ventas = Venta::has('detalleProductos')
            ->with('detalleProductos')
            ->where(function ($query) {
                $query->where('estadoVenta', null);
            })
            ->get();

        return response()->json($ventas);
    }

    function comprasConfirmadas(){
        $ventas = Venta::has('detalleProductos')
            ->with('detalleProductos')
            ->where('estadoVenta', true)
            ->get();

        return response()->json($ventas);
    }

    function comprasRechazadas()
    {
        $ventas = Venta::has('detalleProductos')
            ->with('detalleProductos')
            ->where('estadoVenta', false)
            ->get();

        return response()->json($ventas);
    }

    function ticket($id){
        $compras = DetalleProducto::where('ventaId',$id)->get();
        return response()->json($compras);
    }
}
