<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//Modelos
use App\Models\User;
use App\Models\Servicio;
use App\Models\Tecnica;


class ConsultasController extends Controller
{
    //

    //consulta para traer todos los usuarios con su respectivo nombre de rol 
    public function usuariosConSuRol()
    {

        $usuarios = User::with(['roles'])->get();
        //roles es la funcion con el mismo nombre en el modelo User o sea la relacion
        //de roles a usuarios   
        // esto te trae todo lo de roles pudiendo maniipularlo con jquery                         

        return response()->json($usuarios);
    }

    public function vistaPrueba(){
        return view('pruebita');
    }

    public function serviciosConTecnicas(){
        $servicioConTecnicas = Servicio::with(['tecnicas'])->get();

        return response()->json($servicioConTecnicas);
    }
}
