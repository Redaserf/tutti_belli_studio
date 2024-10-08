<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventarios = Inventario::all();
        return response()->json($inventarios);
    }

    public function menor(){
        $ventas = Inventario::find(1);
        $citas = Inventario::find(2);
        $cursos = Inventario::find(3);

        $productosVentas = $ventas->producto()->orderBy("cantidadEnStock", "asc")->get();
        $productosCitas = $citas->producto()->orderBy("cantidadEnStock", "asc")->get();
        $productosCursos = $cursos->producto()->orderBy("cantidadEnStock", "asc")->get();

        return response()->json(['venta' => $productosVentas, 'cita' => $productosCitas, 'cursos' => $productosCursos]);
    }

    public function mayor(){
        $ventas = Inventario::find(1);
        $citas = Inventario::find(2);
        $cursos = Inventario::find(3);

        $productosVentas = $ventas->producto()->orderBy("cantidadEnStock", "desc")->get();
        $productosCitas = $citas->producto()->orderBy("cantidadEnStock", "desc")->get();
        $productosCursos = $cursos->producto()->orderBy("cantidadEnStock", "desc")->get();

        return response()->json(['venta' => $productosVentas, 'cita' => $productosCitas, 'cursos' => $productosCursos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
