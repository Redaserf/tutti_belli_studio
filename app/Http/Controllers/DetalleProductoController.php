<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetalleProducto;
use App\Models\Venta;
use Illuminate\Http\Request;

class DetalleProductoController extends Controller
{
    //Compras en espera
    function comprasIndex(){
        $ventas = Venta::has('detalleProductos')
            ->with('detalleProductos')
            ->where(function ($query) {
                $query->where('estadoVenta', null);
            })
            ->get();

        return response()->json($ventas);
    }

    //Compras confirmadas
    function comprasConfirmadas(){
        $ventas = Venta::has('detalleProductos')
            ->with('detalleProductos')
            ->where('estadoVenta', true)
            ->get();

        return response()->json($ventas);
    }

    //Compras rechazadas
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
