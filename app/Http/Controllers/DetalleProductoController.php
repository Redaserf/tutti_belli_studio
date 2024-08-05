<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetalleProducto;
use App\Models\Venta;
use Illuminate\Http\Request;

class DetalleProductoController extends Controller
{
    function comprasIndex(){
        $compras = Venta::all();
        return response()->json($compras);
    }

    function ticket($id){
        $compras = DetalleProducto::where('ventaId',$id)->get();
        return response()->json($compras);
    }
}
