<?php

use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductoHasCursoController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TecnicaController;
use App\Http\Controllers\TecnicaHasCursoController;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\DibujarController;

// ==========[ Vistas ]==========

    Route::get('/', function () {
        return view('Guest.Home-Guest');
    });


    Route::get('/pruebita', [ConsultasController::class, 'vistaPrueba']);

    // ===== [Consultas] =====

    //Consulta para traer los usuarios con sus roles
    Route::get('/usuarios/roles', [ConsultasController::class, 'usuariosConSuRol']);//usuarios con sus roles

    //servicios con sus tecnicas

    Route::get('/servicios/tecnicas', [ConsultasController::class, 'serviciosConTecnicas']);// servicios con sus tecnicas

    //usuarios con el rol de "usuario"
    Route::get('/usuarios/rol/usuario', [ConsultasController::class, 'usuariosConRolUsuario']);

    //usuarios con el rol empleado
    Route::get('/usuarios/rol/empleado', [ConsultasController::class, 'usuariosConRolEmpleado']);

    //citas acceptadas

    Route::get('/citas/aceptadas', [ConsultasController::class, 'citasAceptadas']);

    //citas No aceptadas

    Route::get('/citas/noAceptadas', [ConsultasController::class, 'citasDenegadas']);


    //Citas con sus servicios y tecnicas
    Route::get('/citas/servicios/tecnicas', [ConsultasController::class, 'serviciosTecnicasCitas']);

    //Una cita con sus servicios y tecnicas
    Route::get('/cita/servicios/tecnica/{id}', [ConsultasController::class, 'unaCitaConServiciosTecnica']);


    //verifica disponibilidad de fechas y horas tampoco la usamos
    // Route::get('/citas/verificar', [ConsultasController::class, 'verificarDisponibilidad']);


    //citas no acpetadas hechas por usuarios con datos del usuario y empleado
    Route::get('/cita/usuario/empleado', [ConsultasController::class, 'citasUsuariosEmpleados']);

   //obtener eventos para el calendario
   Route::get('/cita/obtener/eventos', [ConsultasController::class, 'mostrarServiciosTecnicasCitas'])->name('cita.obtener.eventos');

  //buscador/filtro de servicios y tecnicas

  Route::get('/buscar', [ConsultasController::class, 'buscador']);

    //todas las tecnicas que estan en citas_has_servicios
    Route::get('/tecnicas-en-citas-has-servicios', [ConsultasController::class, 'tecnicasConCitas']);





    // ===== [Sevicios] =====
    //devuelve servicio como Json
    Route::get('/get/servicios',[ServicioController::class,'index']);

    // ===== [Inventario] =====
    //devulve inventario como Json
    Route::get('/get/inventarios',[InventarioController::class,'index']);

    // =====[ Guest ]=====

    Route::get('/Home-guest',[ViewsController::class,'guestHome']);
    Route::get('/Login',[ViewsController::class,'LoginVista']);
    Route::get('/Registro',[ViewsController::class,'RegistroVista']);
    Route::post('/ActualizarPefil', [UsuarioController::class, 'actualizarPerfil']);
    Route::get('/Productos-Guest',[ViewsController::class,'guestProductos']);
    Route::get('/admin', function () {
        return view('RegistrarAdministradores');
    });
    Route::post('/RegistroAdmin',[RegistrosController::class, 'RegistroAdmin']);



    // =====[ Guest ]=====

    Route::get('/Home-guest',[ViewsController::class,'guestHome']);
    Route::get('/Login',[ViewsController::class,'LoginVista']);
    Route::get('/Registro',[ViewsController::class,'RegistroVista']);
    Route::get('/Productos-Guest',[ViewsController::class,'guestProductos']);


    // =====[ User ]=====

    Route::get('/Home-usuario', [ViewsController::class, 'userHome']);
    Route::get('/Cursos-User', [ViewsController::class, 'userCursos']);
    Route::get('/Perfil-User', [ViewsController::class, 'userPerfil']);
    Route::get('/Productos-User', [ViewsController::class, 'userProductos']);
    Route::get('/Reservacion-User', [ViewsController::class, 'userReservacion']);
    Route::get('/Carrito-User', [ViewsController::class, 'userCarrito']);
    Route::get('/Historial-User', [ViewsController::class, 'userHistorial']);


    // =====[ Employee ]=====

    Route::get('/Home-empleado', [ViewsController::class, 'employeeHome']);
    Route::get('/Agregar-Cita-Empleado', [ViewsController::class, 'employeeAgregarCita']);
    Route::get('/Ver-Citas-Empleado', [ViewsController::class, 'employeeVerCitas']);
    Route::get('/Ver-Productos-Empleado', [ViewsController::class, 'employeeVerProductos']);



    // =====[ Boss ]=====

    Route::get('/Home-administrador', [ViewsController::class, 'bossHome']);
    Route::get('/Agregar-cita', [ViewsController::class, 'bossAgregarCita']);
    Route::get('/Agregar-Curso', [ViewsController::class, 'bossAgregarCurso']);
    Route::get('/Agregar-Descuento-Producto', [ViewsController::class, 'bossAgregarDescuentoProducto']);
    Route::get('/Agregar-Descuento-Tecnica', [ViewsController::class, 'bossAgregarDescuentoTecnica']);
    Route::get('/Agregar-Empleado', [ViewsController::class, 'bossAgregarEmpleado']);
    Route::get('/Agregar-Producto', [ViewsController::class, 'bossAgregarProducto']);
    Route::get('/Agregar-Servicio', [ViewsController::class, 'bossAgregarServicio']);
    Route::get('/Agregar-Tecnica', [ViewsController::class, 'bossAgregarTecnica']);
    Route::get('/Ver-Inventario', [ViewsController::class, 'bossVerInventario']);
    Route::get('/Ver-Ventas', [ViewsController::class, 'bossVerVentas']);
    Route::get('/Ver-Empleados', [ViewsController::class, 'bossVerEmpleados']);
    Route::get('/Ver-Descuentos', [ViewsController::class, 'bossVerDescuentos']);

    Route::get('/Ver-CitasAdmin', [ConsultasController::class, 'mostrarServiciosTecnicasCitas'])->name('verCitas');

    Route::get('/Ver-Citas', [ViewsController::class, 'bossVerCitas']);
    Route::get('/Ver-Cursos', [ViewsController::class, 'bossVerCursos']);
    Route::get('/Ver-Productos', [ViewsController::class, 'bossVerProductos']);
    Route::get('/Ver-Servicios', [ViewsController::class, 'bossVerServicios']);
    Route::get('/Perfil-Admin',[ViewsController ::class,'bossVerPerfil']);




// ==========[ Login y Registros ]==========


    // =====[ Usuarios ]=====

    Route::post('/LoginUsuario',[UsuarioController::class, 'Login']);
    Route::post('/RegistroUsuario',[UsuarioController::class, 'Registro']);
    Route::get('/Logout',[UsuarioController::class, 'Logout']);

Route::post('/registro/citas/usuarios', [RegistrosController::class, 'RegistroCitaUsuario']);

// =====[ Empleados ]=====
    // =====[ Empleados ]=====

    Route::post('/RegistroEmpleado',[RegistrosController::class, 'RegistroEmpleado']);

    // =====[ Agregar (Administrador) ]=====

    Route::post('/RegistroCitaAdmin',[RegistrosController::class, 'RegistroCita']);
    Route::post('/RegistroCursoAdmin',[RegistrosController::class, 'RegistroCurso']);
    Route::post('/RegistroDescuentoTecnica',[RegistrosController::class, 'RegistroDescuentoTecnica']);
    Route::post('/RegistroDescuentoProducto',[RegistrosController::class, 'RegistroDescuentoProducto']);
    Route::post('/RegistroProducto',[RegistrosController::class, 'RegistroProducto']);
    Route::post('/RegistroServicio',[RegistrosController::class, 'RegistroServicio']);
    Route::post('/RegistroTecnica',[RegistrosController::class, 'RegistroTecnica']);




// ==========[ Dibujar datos ]==========


    // =====[ Productos ]=====

        // ===[ Roles ]===
        Route::get('/get/productos',[DibujarController::class,'productosIndex']);
        Route::get('/get/producto/{id}', [DibujarController::class, 'obtenerProducto']);
        Route::post('/producto/actualizar/{id}', [DibujarController::class, 'actualizarProducto']);
        Route::get('/producto/eliminar/{id}', [DibujarController::class, 'productoDelete']);

        // ===[ Carrito ]===
        Route::get('/get/carrito',[DibujarController::class,'carritoIndex']);
        Route::post('/carrito/agregar', [DibujarController::class, 'carritoAgregar'])->middleware('auth');
        Route::get('/carrito/eliminar/{id}', [DibujarController::class, 'carritoDelete']);



    // =====[ Empleados ]=====

    Route::get('/get/empleados',[DibujarController::class,'employeeIndex']);
    Route::get('/empleado/eliminar/{id}',[DibujarController::class,'employeeDelete']);



    // =====[ Cursos ]=====

    Route::get('/get/cursos',[DibujarController::class,'cursosIndex']);
    Route::get('/cursos/eliminar/{id}',[DibujarController::class,'cursosDelete']);
    Route::get('/get/curso/{id}', [DibujarController::class, 'obtenerCurso']);
    Route::post('/cursos/actualizar/{id}', [DibujarController::class, 'actualizarCurso']);







// ==========[ Cosas de Hugo ]==========


//prueba no hacer caso y si lo vez borralo

Route::get('/pruebita', [ConsultasController::class, 'vistaPrueba']);

// ===== [Consultas] =====

//Consulta para traer los usuarios con sus roles
Route::get('/usuarios/roles', [ConsultasController::class, 'usuariosConSuRol']);//usuarios con sus roles

//servicios con sus tecnicas

Route::get('/servicios/tecnicas', [ConsultasController::class, 'serviciosConTecnicas']);// servicios con sus tecnicas

    Route::post('/RegistroCitaAdmin',[RegistrosController::class, 'RegistroCita']);
    Route::post('/RegistroCursoAdmin',[RegistrosController::class, 'RegistroCurso']);
    Route::post('/RegistroDescuentoTecnica',[RegistrosController::class, 'RegistroDescuentoTecnica']);
    Route::post('/RegistroDescuentoProducto',[RegistrosController::class, 'RegistroDescuentoProducto']);
    Route::post('/RegistroProducto',[RegistrosController::class, 'RegistroProducto']);
    Route::post('/RegistroServicio',[RegistrosController::class, 'RegistroServicio']);
    Route::post('/RegistroTecnica',[RegistrosController::class, 'RegistroTecnica']);


    //editar cita Administrador
    Route::put('/editar/cita/{id}', [RegistrosController::class, 'editarCita']);

    //eliminar cita Administradir
    Route::delete('/eliminar/cita/{id}', [RegistrosController::class, 'eliminarCita']);



// ===== [Sevicios] =====
//devuelve servicio como Json
Route::get('/get/servicios',[ServicioController::class,'index']);
//dar de altra servicio con tecnica y producto
Route::post('/crearServicioConTecnicas',[ServicioController::class, 'crear']);

// ===== [Inventario] =====
//devulve inventario como Json
Route::get('/get/inventarios',[InventarioController::class,'index']);

// ===== [Tecnicas] =====
Route::get('/get/tecnicas',[TecnicaController::class,'index']);
Route::post('/GuardarTecnicasCurso', [TecnicaHasCursoController::class, 'store']);
Route::get('/get/tecnicas/{servicioId}', [TecnicaController::class, 'show']);

//Obtener las tecnicas sin descuento
Route::get('/sinDescuentoTecnica', [TecnicaController::class, 'tecnicaSinDescuento']);
//Obtener las tecnicas con descuento
Route::get('/conDescuentoTecnica', [TecnicaController::class, 'tecnicaConDescuento']);

// ===== [Descuentos] =====
//descuento de tecnica
Route::post('/GuardarDescuentos', [DescuentoController::class, 'aplicarDescuento']);
//descuento de producto
Route::post('/GuardarDescuentoProducto', [DescuentoController::class, 'aplicarDescuentoProducto']);
//Eliminar descuento del producto
Route::post('/eliminarDescuentoProducto/{id}', [DescuentoController::class, 'eliminarDescuentoProducto']);
Route::post('/eliminarDescuentoTecnica/{id}', [DescuentoController::class, 'eliminarDescuentoTecnica']);


// ===== [Productos] =====
//Obtener los productos sin descuento
Route::get('/get/productos/sd',[DibujarController::class,'productoSinDescuento']);
//Obtener productos con descuento
Route::get('/get/productos/cd',[DibujarController::class,'productosConDescuento']);
//===== [ProductoHasCurso] =====
Route::post('productosCursos',[ProductoHasCursoController::class, 'store']);


