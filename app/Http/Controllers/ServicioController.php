<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    function index(){
        $servicios = Servicio::all();
        return response()->json($servicios);
    }
}
