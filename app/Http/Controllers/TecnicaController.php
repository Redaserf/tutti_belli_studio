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
}
