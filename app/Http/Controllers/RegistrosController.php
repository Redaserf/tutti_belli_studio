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
use App\Models\Cita;
use Illuminate\Support\Facades\DB;
use App\Models\CitaHasServicio;




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

    public function RegistroCita(Request $request) {
        // Decodificar los servicios seleccionados
        $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);
    
        // Verificar si los servicios seleccionados están vacíos
        if (empty($serviciosSeleccionados)) {
            return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
        }
    
        // Verificar si ya existe una cita con la misma fecha y hora
        $citaExistente = Cita::where('fechaCita', $request->fechaCita)
                            ->where('horaCita', $request->horaCita)
                            ->first();
    
        if ($citaExistente) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
        }
    
        DB::beginTransaction();
        try {
            // Crear la cita
            $cita = Cita::create([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "notasCita" => $request->notasCita,
                "estadoCita" => true
            ]);
    
            // Crear las relaciones entre la cita y los servicios
            foreach ($serviciosSeleccionados as $servicio) {
                CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId']
                ]);
            }
    
            DB::commit();
            return response()->json(['message' => 'Cita creada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al crear la cita', 'error' => $e->getMessage()], 500);
        }
    }

    public function editarCita(Request $request, $id) {
        // Validación de los datos del request
        $validatedData = $request->validate([
            'fechaCita' => 'required|date',
            'horaCita' => 'required|date_format:H:i:s',
            'usuarioId' => 'required|exists:users,id',
            'empleadoId' => 'required|exists:users,id',
            'notasCita' => 'nullable|string',
            'serviciosSeleccionados' => 'required|json'
        ]);
    
        // Decodificar los servicios seleccionados
        $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);
    
        // Verificar si los servicios seleccionados están vacíos
        if (empty($serviciosSeleccionados)) {
            return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
        }
    
        // Verificar si ya existe una cita con la misma fecha y hora (excluyendo la cita actual)
        $citaExistente = Cita::where('fechaCita', $request->fechaCita)
                            ->where('horaCita', $request->horaCita)
                            ->where('id', '<>', $id)
                            ->first();
    
        if ($citaExistente) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
        }
    
        DB::beginTransaction();
        try {
            // Obtener la cita
            $cita = Cita::findOrFail($id);
    
            // Actualizar la cita
            $cita->update([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "notasCita" => $request->notasCita,
                "estadoCita" => true
            ]);
    
            // Eliminar las relaciones antiguas
            CitaHasServicio::where('citaId', $id)->delete();
    
            // Crear las nuevas relaciones
            foreach ($serviciosSeleccionados as $servicio) {
                CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId']
                ]);
            }
    
            DB::commit();
            return response()->json(['message' => 'Cita actualizada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al actualizar la cita', 'error' => $e->getMessage()], 500);
        }
    }

    public function eliminarCita($id) {
        DB::beginTransaction();
        try {
            // Obtener la cita
            $cita = Cita::findOrFail($id);
    
            // Eliminar las relaciones entre la cita y los servicios
            CitaHasServicio::where('citaId', $id)->delete();
    
            // Eliminar la cita
            $cita->delete();
    
            DB::commit();
            return response()->json(['message' => 'Cita eliminada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al eliminar la cita', 'error' => $e->getMessage()], 500);
        }
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


}
