<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Descuento;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Tecnica;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrosController extends Controller
{

    // Registrar administradores
    function RegistroAdmin(Request $request){

        $administrador = new User();
        $administrador->name = $request->name;
        $administrador->apellido = $request->apellido;
        $administrador->fechaNacimiento = $request->fechaNacimiento;
        $administrador->gender = $request->gender;
        $administrador->email = $request->email;
        $administrador->password  = bcrypt($request->password);
        $administrador->fotoPerfil = $request->fotoPerfil;
        $administrador->numeroTelefono  = $request->numeroTelefono;
        $administrador->rolId = $request->rolId;
        $administrador->save();
        Auth::login($administrador);
    }



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

        if ($request->hasFile('imagenCurso')) {
            $curso->imagen = $request->file('imagenCurso')->store('imagenCurso', 'public');
        }

        $curso->descripcion = $request->descripcion;
        $curso->empleadoId = $request->empleadoId;
        $curso->save();

        //regresa el id del curso que se acaba de crear para mandarlo en el ajax
        // que se encuentra en Cursos
        return response()->json(['cursoId' => $curso->id]);

    }

    function RegistroProducto(Request $request)
    {
//        $imagenPath = $request->file('imagenProducto')->store('imagenProducto', 'public');

        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'cantidadEnStock' => 'required|integer',
            'imagenProducto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inventarioId' => 'required|integer'
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidadEnStock = $request->cantidadEnStock;

        if ($request->hasFile('imagenProducto')) {
            $producto->imagen = $request->file('imagenProducto')->store('imagenProducto', 'public');
        }

        $producto->descripcion = $request->descripcion;

        $producto->inventarioId = $request->inventarioId;
        $producto->save();

        return response()->json(['success' => 'Producto agregado exitosamente']);
    }

    function RegistroCitaAdmin(){

    }

    function RegistroDescuentoProducto(){

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

    function RegistroDescuentoTecnica(Request $request)
    {
        $descuento = new Descuento();
        $descuento->cantidadDescuento = $request->cantidadDescuento;
        $descuento->save();

        //regresa el id del desuento que se acaba de crear para mandarlo en el ajax
        // que se encuentra en Desucento-tecnica
        return response()->json(['descuentoId' => $descuento->id]);

    }


}
