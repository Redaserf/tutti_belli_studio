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
}
