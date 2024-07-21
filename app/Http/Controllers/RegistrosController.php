<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Tecnica;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrosController extends Controller
{

    // Aquí los registros que puede hacer el administrador
    function RegistroServicio(Request $request)
    {
//        $request->validate([
//            'nombre' => 'required|string|max:255',
//        ]);

        $servicio = new Servicio();
        $servicio->nombre = $request->nombre;
        $servicio->save();

//        return response()->json(['message' => 'Servicio agregado exitosamente!']);
    }

    function RegistroTecnica(Request $request)
    {
        $tecnica = new Tecnica();
        $tecnica->nombre = $request->nombre;
        $tecnica->precio = $request->precio;
        $tecnica->descripcion = $request->descripcion;
        $tecnica->servicioId = $request->servicioId;
        $tecnica->save();
    }


    function RegistroEmpleado(Request $request)
    {
        $empleado = new User();
        $empleado->name = $request->name;
        $empleado->apellido = $request->apellido;
        $empleado->fechaNacimiento = $request->fechaNacimiento;
        $empleado->gender = $request->gender;
        $empleado->email = $request->email;
        $empleado->password  = bcrypt($request->password);
        $empleado->fotoPerfil = $request->fotoPerfil;
        $empleado->numeroTelefono  = $request->numeroTelefono;
        $empleado->rolId = $request->rolId;
        $empleado->save();

    }

    function RegistroCurso(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->cupoLimite = $request->cupoLimite;
        $curso->fechaInicio = $request->fechaInicio;
        $curso->horaInicio = $request->horaInicio;
        $curso->precio = $request->precio;
        $curso->empleadoId = $request->empleadoId;
        $curso->save();

        //regresa el id del curso que se acaba de crear para mandarlo en el ajax
        // que se encuentra en Cursos
        return response()->json(['cursoId' => $curso->id]);

    }

    function RegistroProducto(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidadEnStock = $request->cantidadEnStock;
        $producto->inventarioId = $request->inventarioId;
        $producto->save();

    }

//    public function RegistroEmpleado(Request $request){
//        $empleado = User::create([
//            'name' => $request->employeeName,
//            'apellido' => $request->employeeLastname,
//            'fechaNacimiento' => $request->employeeBirthDate,
//            'numeroTelefono' => $request->employeePhone,
//            'email' => $request->employeeEmail,
//            'gender' => $request->employeeGender,
//            'password' => Hash::make($request->employeePassword),
//            'rolId' => 3,
//        ]);
//
//        return redirect('/Ver-Empleados');
//    }
}
