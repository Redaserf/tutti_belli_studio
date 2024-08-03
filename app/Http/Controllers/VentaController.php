<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetalleProducto;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    function crearCompra(Request $request){

        $usuario = Auth::user();

        //Da de alta la venta
        $venta = Venta::create([
            'total' => $request->total,
            'fechaVenta'=> $request->fechaVenta,
            'usuarioId' => $usuario->id
        ]);

        //arreglo que reccore los productos comprados
        for($i = 0; $i < count($request->productosComprados); $i++){
            DetalleProducto::create([
                //llena cada key con el valor correspondiente del arreglo buscandolo por la key misma
                'nombre' => $request->productosComprados[$i]['nombre'],
                'descripcion' => $request->productosComprados[$i]['descripcion'],
                'precio' => $request->productosComprados[$i]['precio'],
                'ventaId' => $venta->id,
                'productoId' => $request->productosComprados[$i]['id']
            ]);
        }

    }
}
