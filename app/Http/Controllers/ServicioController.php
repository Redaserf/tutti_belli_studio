<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductoHasTecnica;
use App\Models\Servicio;
use App\Models\Tecnica;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    function index(){
        $servicios = Servicio::all();
        return response()->json($servicios);
    }

        function crear(Request $request){
            // Crear el servicio
            $servicio = Servicio::create([
                "nombre" => $request->nombreServicio,  // Corregir nombre de la variable
            ]);

            // Decodificar los JSON
            $arregloProductos = $request->arregloProductos;
            $arregloCantidadesProducto = $request->arregloCantidades;
//            $arregloProductos = json_decode($request->arregloProductos, true);
//            $arregloCantidadesProducto = json_decode($request->arregloCantidades, true);
            $tecnicaData = $request->tecnica;

            // Añadir el ID del servicio a los datos de la técnica
            $tecnicaData['servicioId'] = $servicio->id;

            $tecnicaData = [
                'nombre' => $request->tecnica['nombre'], // string
                'precio' => (double) $request->tecnica['precio'], // float
                'descripcion' => $request->tecnica['descripcion'], // string
                'servicioId' => (int) $servicio->id // integer
            ];
//
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

            return response()->json(['message' => 'Servicio y técnicas creadas con éxito']);
        }
}
