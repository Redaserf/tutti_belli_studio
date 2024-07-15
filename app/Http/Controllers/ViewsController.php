<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewsController extends Controller
{

    // ==========[ Guest ]==========

    public function guestHome(){
        return view('Guest.Home-guest');
    }

    public function guestCursos(){
        return view('Guest.Cursos-guest');
    }

    public function guestProductos(){
        return view('Guest.Productos-guest');
    }

    public function LoginVista(){
        return view('Guest.Login');
    }

    public function RegistroVista(){
        return view('Guest.Registro');
    }


    // ==========[ User ]==========

    public function userHome(){
        return view('User.Home-usuario');
    }

    public function userPerfil(){
        return view('User.Perfil-User');
    }

    public function userCursos(){
        return view('User.Cursos-User');
    }

    public function userProductos(){
        return view('User.Productos-User');
    }

    public function userReservacion(){
        return view('User.Reservacion-User');
    }


    // ==========[ Employee ]==========

    public function employeeHome(){
        return view('Employee.Home-empleado');
    }

    public function employeeAgregarCita(){
        return view('Employee.Agregar-Cita-Empleado');
    }

    public function employeeVerCitas(){
        return view('Employee.Ver-Citas-Empleado');
    }


    // ==========[ Boss ]==========

    public function bossHome(){
        return view('Boss.Home-administrador');
    }

    public function bossAgregarCita(){
        return view('Boss.Agregar-cita');
    }

    public function bossAgregarCurso(){
        return view('Boss.Agregar-Curso');
    }

    public function bossAgregarDescuentoProducto(){
        return view('Boss.Agregar-Descuento-Producto');
    }

    public function bossAgregarDescuentoTecnica(){
        return view('Boss.Agregar-Descuento-Tecnica');
    }

    public function bossAgregarEmpleado(){
        return view('Boss.Agregar-Empleado');
    }

    public function bossAgregarProducto(){
        return view('Boss.Agregar-Producto');
    }

    public function bossAgregarServicio(){
        return view('Boss.Agregar-Servicio');
    }

    public function bossAgregarTecnica(){
        return view('Boss.Agregar-Tecnica');
    }

    public function bossVerInventario(){
        return view('Boss.Ver-Inventario');
    }

    public function bossVerVentas(){
        return view('Boss.Ver-Ventas');
    }

}
