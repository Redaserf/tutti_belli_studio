<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultasController;


// ==========[ Vistas ]==========

Route::get('/', function () {
    return view('Roles');
});

//prueba no hacer caso y si lo vez borralo

    Route::get('/pruebita', [ConsultasController::class, 'vistaPrueba']);

    //consultas

    //Consulta para traer los usuarios con sus roles
    Route::get('/usuarios/roles', [ConsultasController::class, 'usuariosConSuRol']);//usuarios con sus roles

    //servicios con sus tecnicas

    Route::get('/servicios/tecnicas', [ConsultasController::class, 'serviciosConTecnicas']);// servicios con sus tecnicas


    // =====[ Guest ]=====

    Route::get('/Home-guest',[ViewsController::class,'guestHome']);
    Route::get('/Login',[ViewsController::class,'LoginVista']);
    Route::get('/Registro',[ViewsController::class,'RegistroVista']);
    Route::get('/Productos-Guest',[ViewsController::class,'guestProductos']);


    // =====[ User ]=====

    Route::get('/Home-usuario',[ViewsController::class,'userHome']);
    Route::get('/Cursos-User',[ViewsController::class,'userCursos']);
    Route::get('/Perfil-User',[ViewsController::class,'userPerfil']);
    Route::get('/Productos-User',[ViewsController::class,'userProductos']);
    Route::get('/Reservacion-User',[ViewsController::class,'userReservacion']);


    // =====[ Employee ]=====

    Route::get('/Home-empleado',[ViewsController::class,'employeeHome']);
    Route::get('/Agregar-Cita-Empleado',[ViewsController::class,'employeeAgregarCita']);
    Route::get('/Ver-Citas-Empleado',[ViewsController::class,'employeeVerCitas']);
    Route::get('/Ver-Productos-Empleado',[ViewsController::class,'employeeVerProductos']);


    // =====[ Boss ]=====

    Route::get('/Home-administrador',[ViewsController::class,'bossHome']);
    Route::get('/Agregar-cita',[ViewsController::class,'bossAgregarCita']);
    Route::get('/Agregar-Curso',[ViewsController::class,'bossAgregarCurso']);
    Route::get('/Agregar-Descuento-Producto',[ViewsController::class,'bossAgregarDescuentoProducto']);
    Route::get('/Agregar-Descuento-Tecnica',[ViewsController::class,'bossAgregarDescuentoTecnica']);
    Route::get('/Agregar-Empleado',[ViewsController::class,'bossAgregarEmpleado']);
    Route::get('/Agregar-Producto',[ViewsController::class,'bossAgregarProducto']);
    Route::get('/Agregar-Servicio',[ViewsController::class,'bossAgregarServicio']);
    Route::get('/Agregar-Tecnica',[ViewsController::class,'bossAgregarTecnica']);
    Route::get('/Ver-Inventario',[ViewsController::class,'bossVerInventario']);
    Route::get('/Ver-Ventas',[ViewsController::class,'bossVerVentas']);
    Route::get('/Ver-Empleados',[ViewsController::class,'bossVerEmpleados']);
    Route::get('/Ver-Descuentos',[ViewsController::class,'bossVerDescuentos']);
    Route::get('/Ver-Citas',[ViewsController::class,'bossVerCitas']);
    Route::get('/Ver-Cursos',[ViewsController::class,'bossVerCursos']);
    Route::get('/Ver-Productos',[ViewsController::class,'bossVerProductos']);
    Route::get('/Ver-Servicios',[ViewsController::class,'bossVerServicios']);



