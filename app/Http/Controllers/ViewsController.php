<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ViewsController extends Controller
{

    // ==========[ Guest ]==========

    public function guestHome(){
        if (!Auth::check()) {
            return view('Guest.Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function guestProductos(){
        if (!Auth::check()) {
            return view('Guest.Productos-Guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-Productos');
        } elseif ($user->rolId == 2) {
            return redirect('/Productos-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Ver-Productos-Empleado');
        }
    }

    public function LoginVista(){
        if (!Auth::check()) {
            return view('Guest.Login');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function RegistroVista(){
        if (!Auth::check()) {
            return view('Guest.Registro');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }


    // ==========[ User ]==========

    public function userHome(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return view('User.Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function userPerfil(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return view('User.Perfil-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function userCursos(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-Cursos');
        } elseif ($user->rolId == 2) {
            return view('User.Cursos-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function userProductos(){
        if (!Auth::check()) {
            return redirect('/Productos-Guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-Productos');
        } elseif ($user->rolId == 2) {
            return view('User.Productos-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Ver-Productos-Empleado');
        }
    }

    public function userReservacion(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Agregar-cita');
        } elseif ($user->rolId == 2) {
            return view('User.Reservacion-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Agregar-Cita-Empleado');
        }
    }

    public function userCarrito(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return view('User.Carrito-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function userHistorial(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return view('User.Historial-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }


    // ==========[ Employee ]==========

    public function employeeHome(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Home-administrador');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return view('Employee.Home-empleado');
        }
    }

    public function employeeAgregarCita(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Agregar-cita');
        } elseif ($user->rolId == 2) {
            return redirect('/Reservacion-User');
        } elseif ($user->rolId == 3) {
            return view('Employee.Agregar-Cita-Empleado');
        }
    }

    public function employeeVerCitas(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-Citas');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return view('Employee.Ver-Citas-Empleado');
        }
    }

    public function employeeVerProductos(){
        if (!Auth::check()) {
            return redirect('/Productos-Guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-Productos');
        } elseif ($user->rolId == 2) {
            return redirect('/Productos-User');
        } elseif ($user->rolId == 3) {
            return view('Employee.Ver-Productos-Empleado');
        }
    }
    public function employeeVerVentas(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-Productos');
        } elseif ($user->rolId == 2) {
            return redirect('/Productos-User');
        } elseif ($user->rolId == 3) {
            return view('Employee.Ver-ventas-empleado');
        }
    }
    


    // ==========[ Boss ]==========

    public function bossHome(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Home-administrador');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarCita(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-cita');
        } elseif ($user->rolId == 2) {
            return redirect('/Reservacion-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Agregar-Cita-Empleado');
        }
    }

    public function bossAgregarCurso(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Curso');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarDescuentoProducto(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Descuento-Producto');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }
    public function bossVerPerfil(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Perfil-Admin');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarDescuentoTecnica(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Descuento-Tecnica');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarEmpleado(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Empleado');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarProducto(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Producto');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarServicio(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Servicio');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossAgregarTecnica(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Agregar-Tecnica');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerInventario(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Inventario');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerVentas(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Ventas');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerEmpleados(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Empleados');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerDescuentos(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Descuentos');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerCitas(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return redirect('/Ver-CitasAdmin');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Ver-Citas-Empleado');
        }
    }

    public function bossVerCursos(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Cursos');
        } elseif ($user->rolId == 2) {
            return redirect('/Cursos-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerProductos(){
        if (!Auth::check()) {
            return redirect('/Productos-Guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Productos');
        } elseif ($user->rolId == 2) {
            return redirect('/Productos-User');
        } elseif ($user->rolId == 3) {
            return redirect('/Ver-Productos');
        }
    }

    public function bossVerServicios(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Servicios');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }

    public function bossVerReportes(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Reportes');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }


    public function Producto(){
        return view('User.Ver-Prodcuto-especifico');
    }

    public function bossVercitasdeemp(){
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Vistas-pend-Emp');
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }
    }


}
