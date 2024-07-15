<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

// ==========[ Vistas ]==========

Route::get('/', function () {
    return view('Guest.Home-guest');
});


    // =====[ Guest ]=====

    Route::get('/Home-guest',[ViewsController::class,'guestHome']);
    Route::get('/Cursos-Guest',[ViewsController::class,'guestCursos']);
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