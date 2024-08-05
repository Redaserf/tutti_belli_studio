<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function productosCitas()
    {
        $productos = Producto::where('inventarioId', '=', 2)
            ->get();
        return response()->json($productos);
    }
    function productosCursos()
    {
        $productos = Producto::where('inventarioId', '=', 3)
            ->get();
        return response()->json($productos);
    }

    function productosCompras(){
        $productos = Producto::where('inventarioId', '=', 1)
            ->get();
        return response()->json($productos);
    }

}
