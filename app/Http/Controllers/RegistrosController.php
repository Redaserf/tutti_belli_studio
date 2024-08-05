<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Descuento;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Tecnica;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cita;
use App\Mail\CorreoEspera;
use App\Mail\CorreoCancelacion;
use App\Mail\CorreoConfirmacion;
use Illuminate\Support\Facades\DB;
use App\Models\CitaHasServicio;
use Illuminate\Support\Facades\Mail;
use App\Models\DetalleTecnica;
use App\Models\DetalleTecnicaProducto;





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



    // -----[ Aquí los registros que puede hacer el administrador ] -----


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
        $curso->imagen = $request->imagen;
        $curso->descripcion = $request->descripcion;
        $curso->precio = $request->precio;
        if ($request->hasFile('imagenCurso')) {
            $curso->imagen = $request->file('imagenCurso')->store('imagenCurso', 'public');
        }
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
            'descripcion' => 'required|string|max:255',
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

    public function RegistroCita(Request $request) {
        $request->validate([
            'fechaCita' => 'required|date',
            'horaCita' => 'required|date_format:H:i:s',
            'usuarioId' => 'required|exists:users,id',
            'empleadoId' => 'required|exists:users,id',
            'serviciosSeleccionados' => 'required|json'
        ]);
    
        // Decodificar el JSON
        $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);
    
        // Verificar si los servicios seleccionados están vacíos
        if (empty($serviciosSeleccionados)) {
            return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
        }
    
        // Validar formato de serviciosSeleccionados
        foreach ($serviciosSeleccionados as $servicio) {
            if (!isset($servicio['servicioId']) || !isset($servicio['tecnicaId'])) {
                return response()->json(['message' => 'Formato de servicio seleccionado incorrecto'], 400);
            }
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
            // Crear una venta
            $venta = Venta::create([
                'fechaVenta' => $request->fechaCita,
                'total' => 0,
                'estadoVenta' => false,
            ]);
    
            // Crear la cita
            $cita = Cita::create([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "ventaId" => $venta->id,
                "notasCita" => $request->notasCita,
                "estadoCita" => true
            ]);
    
            // Crear las relaciones entre la cita y los servicios
            foreach ($serviciosSeleccionados as $servicio) {
                $citaHasServicios = CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId']
                ]);
    
                $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);
    
                foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {
                    DetalleTecnicaProducto::create([
                        'citaId' => $cita->id,
                        'tecnicaId' => $servicio['tecnicaId'],
                        'productoId' => $productoHasTecnica->productoId,
                        'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                    ]);
                }
            }
    
            // Calcular el precio total de las técnicas para esta cita
            $totalVenta = CitaHasServicio::where('citaId', $cita->id)
                ->join('tecnicas', 'citas_has_servicios.tecnicaId', '=', 'tecnicas.id')
                ->sum('tecnicas.precio');
    
            // Actualiza el precio total en la tabla ventas
            $venta->update(['total' => $totalVenta]);
    
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
            DetalleTecnicaProducto::where('citaId', $id)->delete();
    
            // Crear las nuevas relaciones
            foreach ($serviciosSeleccionados as $servicio) {
                $citaHasServicios = CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId']
                ]);
    
                $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);
    
                foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {
                    DetalleTecnicaProducto::create([
                        'citaId' => $cita->id,
                        'tecnicaId' => $servicio['tecnicaId'],
                        'productoId' => $productoHasTecnica->productoId,
                        'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                    ]);
                }
            }
    
            // Recalcular el precio total de las técnicas para esta cita
            $totalVenta = CitaHasServicio::where('citaId', $cita->id)
                ->join('tecnicas', 'citas_has_servicios.tecnicaId', '=', 'tecnicas.id')
                ->sum('tecnicas.precio');
    
            // Actualizar la fecha y el precio total en la tabla ventas
            Venta::where('id', $cita->ventaId)->update([
                'fechaVenta' => $request->fechaCita,
                'total' => $totalVenta,
                'estadoVenta' => false
            ]);
    
            // Enviar correo de confirmación
            Mail::to($cita->usuario->email)->send(new CorreoConfirmacion($cita));
    
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
            $usuario = $cita->usuario;
    
            // Obtener el ID de la venta asociada
            $ventaId = $cita->ventaId;
    
            // Eliminar las relaciones entre la cita y los servicios
            CitaHasServicio::where('citaId', $id)->delete();
            DetalleTecnicaProducto::where('citaId', $id)->delete();

    
            // Eliminar la cita
            $cita->delete();
    
            // Eliminar la venta asociada
            Venta::where('id', $ventaId)->delete();
    
            // Enviar correo de cancelación
            Mail::to($usuario->email)->send(new CorreoCancelacion($cita));
    
            DB::commit();
            return response()->json(['message' => 'Cita y venta eliminadas con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al eliminar la cita', 'error' => $e->getMessage()], 500);
        }
    }
    
    
    
    function RegistroDescuentoProducto(Request $request){

        $descuento = new Descuento();
        $descuento->cantidadDescuento = $request->cantidadDescuento;
        $descuento->save();

        //regresa el id del desuento que se acaba de crear para mandarlo en el ajax
        // que se encuentra en Desucento-Producto
        return response()->json(['descuentoId' => $descuento->id]);

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





    public function RegistroCitaUsuario(Request $request)
    {
        $request->validate([
            'fechaCita' => 'required|date',
            'horaCita' => 'required|date_format:H:i:s',
            'usuarioId' => 'required|exists:users,id',
            'empleadoId' => 'required|exists:users,id',
            'serviciosSeleccionados' => 'required|json'
        ]);
    
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
            // Crear la venta
            $venta = Venta::create([
                'fechaVenta' => $request->fechaCita,
                'total' => 0,
                'estadoVenta' => false,
            ]);
    
            // Crear la cita
            $cita = Cita::create([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "ventaId" => $venta->id,
                "notasCita" => $request->notasCita ?? null,
                "estadoCita" => false
            ]);
    
            // Crear las relaciones entre la cita y los servicios
            foreach ($serviciosSeleccionados as $servicio) {
                $citaHasServicios = CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId']
                ]);
    
                $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);
    
                foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {
                    DetalleTecnicaProducto::create([
                        'citaId' => $cita->id,
                        'tecnicaId' => $servicio['tecnicaId'],
                        'productoId' => $productoHasTecnica->productoId,
                        'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                    ]);
                }
            }
    
            // Calcular el precio total de las técnicas para esta cita
            $totalVenta = CitaHasServicio::where('citaId', $cita->id)
                ->join('tecnicas', 'citas_has_servicios.tecnicaId', '=', 'tecnicas.id')
                ->sum('tecnicas.precio');
            
            // Actualizar el precio total en la tabla ventas
            $venta->update(['total' => $totalVenta]);
    
            // Enviar correo de espera
            Mail::to($request->user()->email)->send(new CorreoEspera($cita));
    
            DB::commit();
            return response()->json(['message' => 'Cita creada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al crear la cita', 'error' => $e->getMessage()], 500);
        }
    }
    

    public function actualizarDetalleTecnica(Request $request)
    {
        $request->validate([
            'changes' => 'required|array', // Validar que 'changes' es un array
            'changes.*' => 'required|integer|min:1', // Cada entrada debe ser un entero positivo
        ]);
    
        $changes = $request->input('changes');
    
        DB::beginTransaction();
        try {
            foreach ($changes as $detalleTecnicaId => $cantidad) {
                $detalleTecnica = DetalleTecnicaProducto::find($detalleTecnicaId);
                
                if (!$detalleTecnica) {
                    throw new \Exception("Detalle técnica con ID $detalleTecnicaId no encontrado.");
                }
    
                $producto = Producto::find($detalleTecnica->productoId);
                
                if (!$producto) {
                    throw new \Exception("Producto asociado con el detalle técnica no encontrado.");
                }
    
                // Verificar que la cantidad solicitada no excede el stock disponible
                if ($cantidad > $producto->cantidadEnStock - 10) {
                    throw new \Exception("La cantidad solicitada para el producto '{$producto->nombre}' excede el stock disponible.");
                }
    
                // Si todo está bien, actualizar la cantidad
                $detalleTecnica->update(['cantidadProducto' => $cantidad]);
            }
            
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Cantidades actualizadas correctamente.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    
    

    


 

}