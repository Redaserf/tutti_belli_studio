<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Descuento;
use App\Models\Producto;
use App\Models\ProductoHasCurso;
use App\Models\Servicio;
use App\Models\Tecnica;
use App\Models\TecnicaHasCurso;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cita;
use App\Mail\CorreoEspera;
use App\Mail\CorreoCancelacion;
use App\Mail\CorreoConfirmacion;
use App\Mail\NotificarAdministrador;
use Illuminate\Support\Facades\DB;
use App\Models\CitaHasServicio;
use Illuminate\Support\Facades\Mail;
use App\Models\DetalleTecnica;
use App\Models\DetalleTecnicaProducto;
use App\Models\ProductoHasTecnica;





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

        DB::beginTransaction();

        try{

            // Extraer datos del request
            $nombre = $request->input('nombre');
            $cupoLimite = $request->input('cupoLimite');
            $fechaInicio = $request->input('fechaInicio');
            $horaInicio = $request->input('horaInicio');
            $precio = $request->input('precio');
            $descripcion = $request->input('descripcion');
            $empleadoId = $request->input('empleadoId');
            $tecnicas = json_decode($request->input('tecnicas'), true);
            $productos = json_decode($request->input('productos'), true);
            $cantidadesProductos = json_decode($request->input('cantidadesProductos'), true);


            // Guardar la imagen
            if ($request->hasFile('imagenCurso')) {
                $imagePath = $request->file('imagenCurso')->store('imagenes', 'public');
            } else {
                $imagePath = null; // O un valor predeterminado si es necesario
            }

            // REVISAR PORQUE ESTO NO FUNCIONO
//            Curso::create([
//                'nombre' => $nombre,
//                'cupoLimite' => $cupoLimite,
//                'fechaInicio' => $fechaInicio,
//                'horaInicio' => $horaInicio,
//                'precio' => $precio,
//                'imagenCurso' => $imagePath,
//                'descripcion' => $descripcion,
//                'empleadoId' => $empleadoId
//            ]);

            $curso = new Curso();
            $curso->nombre = $nombre;
            $curso->cupoLimite = $cupoLimite;
            $curso->fechaInicio = $fechaInicio;
            $curso->horaInicio = $horaInicio;
            $curso->descripcion = $descripcion;
            $curso->precio = $precio;
            if ($request->hasFile('imagenCurso')) {
                $curso->imagen = $request->file('imagenCurso')->store('imagenCurso', 'public');
            }
            $curso->empleadoId = $empleadoId;
            $curso->save();

            if(empty($tecnicas)){
                return 'no hay tenicas asociadas al curso';
            }

            // Guardar las técnicas seleccionadas para el curso
            foreach ($tecnicas as $tecnicaId) {
                TecnicaHasCurso::create([
                    'cursoId' => $curso->id,
                    'tecnicaId' => $tecnicaId,
                ]);
            }

            if(empty($productos)){
                return 'no hay productos asociados al curso';
            }

            //Guardar productos en el curso
            for ($i = 0; $i < count($productos); $i++) {
                ProductoHasCurso::create([
                    'cursoId' => $curso->id,
                    'productoId' => $productos[$i],
                    'cantidadPorUsar' => $cantidadesProductos[$i],
                ]);
            }

            DB::commit();
        }catch (\Exception $e){
            DB::rollback();
            return response()->json(['message' => 'Error: ',  $e->getMessage()], 500);
        }




        //regresa el id del curso que se acaba de crear para mandarlo en el ajax
        // que se encuentra en Cursos
//        return response()->json(['cursoId' => $curso->id]);

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
            // 'fechaCita' => 'required|date|after_or_equal:today',
            'horaCita' => 'required|date_format:H:i:s',
            'usuarioId' => 'required|exists:users,id',
            'empleadoId' => 'required|exists:users,id',
            'serviciosSeleccionados' => 'required|json'
        ], [
            // 'required' => 'Este campo es obligatorio.',
            'date' => 'La fecha no es válida.',
            'date_format' => 'El formato de la hora es inválido.',
            'after_or_equal' => 'La fecha debe ser hoy o posterior.',
            'json' => 'Los datos deben estar en formato JSON válido.',
        ]);
        
    
        $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);


        if (empty($serviciosSeleccionados)) {
            return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
        }

        foreach ($serviciosSeleccionados as $servicio) {
            if (!isset($servicio['servicioId']) || !isset($servicio['tecnicaId'])) {
                return response()->json(['message' => 'Formato de servicio seleccionado incorrecto'], 400);
            }
        }

        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        }
    
        $citaExistente = Cita::where('empleadoId', $request->empleadoId)->where('fechaCita', $request->fechaCita)
        ->where('horaCita', $request->horaCita)
        ->first();

        if ($citaExistente) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
        }

        DB::beginTransaction();
        try {
            $cita = Cita::create([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "notasCita" => $request->notasCita,
                "estadoCita" => true
            ]);

            $venta = Venta::create([
                'fechaVenta' => $request->fechaCita,
                'total' => 0,
                'estadoVenta' => false,
                'usuarioId' => $cita->usuarioId
            ]);
    
            foreach ($serviciosSeleccionados as $servicio) {
                $citaHasServicios = CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId'],
                    'ventaId' => $venta->id,
                    'precioTecnica' => 0,
                ]);

                $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);

                $citaHasServicios->update([
                    'precioTecnica' => $tecnica->precio
                ]);

                foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {

                    $producto = $productoHasTecnica->producto;


                    if($producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso * 2){
                        $detalleProductos = DetalleTecnicaProducto::create([
                            'citaId' => $cita->id,
                            'tecnicaId' => $servicio['tecnicaId'],
                            'productoId' => $productoHasTecnica->productoId,
                            'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                        ]);

                        $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso * 2;
                        //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
                         $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso * 2;
                         //La cantidad se guarda en la reserva del producto por cualquier cancelacion o cualquier cosa
                         // se suma y no lo igualo pq alteraria el registro
                         $producto->save();//se guardan cambios

                    }else{
                        throw new \Exception("No hay suficientes productos para hacer la cita con la tecnica: {$productoHasTecnica->tecnica->nombre}");
                    }
                }
            }

            $totalVenta = CitaHasServicio::where('citaId', $cita->id)
                ->join('tecnicas', 'citas_has_servicios.tecnicaId', '=', 'tecnicas.id')
                ->sum('tecnicas.precio');

            $venta->update(['total' => $totalVenta]);

            DB::commit();
            return response()->json(['message' => 'Cita creada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al crear la cita', 'error' => $e->getMessage()], 500);
        }
    }


    public function editarCita(Request $request, $id) {
        $request->validate([
            'fechaCita' => 'required|date|after_or_equal:today',
            'horaCita' => 'required|date_format:H:i:s',
            'usuarioId' => 'required|exists:users,id',
            'empleadoId' => 'required|exists:users,id',
            'serviciosSeleccionados' => 'required|json'
        ], [
            'required' => 'Este campo es obligatorio.',
            'date' => 'La fecha no es válida.',
            'date_format' => 'El formato de la hora es inválido.',
            'after_or_equal' => 'La fecha debe ser hoy o posterior.',
            'json' => 'Los datos deben estar en formato JSON válido.',
        ]);
        
    
        $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);

        if (empty($serviciosSeleccionados)) {
            return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
        }
    
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        }

        $citaExistente = Cita::where('id', '<>', $id)
        ->where('empleadoId', $request->empleadoId)->where('fechaCita', $request->fechaCita)
        ->where('horaCita', $request->horaCita)
        ->first();

        if ($citaExistente) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
        }

        DB::beginTransaction();
        try {
            $cita = Cita::findOrFail($id);

            $cita->update([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "notasCita" => $request->notasCita,
                "estadoCita" => true
            ]);

            $ventaId = CitaHasServicio::where('citaId', $id)->value('ventaId');

            $productosDevolverStock = DetalleTecnicaProducto::where('citaId', $id)
            ->with('producto')
            ->get();

            foreach($productosDevolverStock as $productoDetalle){//devuelve el stock de los productos de las tecnicas anteriores
                $producto = $productoDetalle->producto;
                if($producto) {
                    $producto->cantidadEnStock += $productoDetalle->cantidadProducto;
                    $producto->cantidadReserva -= $productoDetalle->cantidadProducto;
                    $producto->save();
                }
            }


            CitaHasServicio::where('citaId', $id)->delete();//eliminar relaciones
            DetalleTecnicaProducto::where('citaId', $id)->delete();

            foreach ($serviciosSeleccionados as $servicio) {
                $citaHasServicios = CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId'],
                    'ventaId' => $ventaId,
                    'precioTecnica' => 0,
                ]);

                $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);

                $citaHasServicios->update([
                    'precioTecnica' => $tecnica->precio
                ]);

                foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {

                    $producto = $productoHasTecnica->producto;


                    if($producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso * 2){
                        $detalleProductos = DetalleTecnicaProducto::create([
                            'citaId' => $cita->id,
                            'tecnicaId' => $servicio['tecnicaId'],
                            'productoId' => $productoHasTecnica->productoId,
                            'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                        ]);

                        $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso * 2;
                        //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
                         $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso * 2;
                         //La cantidad se guarda en la reserva del producto por cualquier cancelacion o cualquier cosa
                         // se suma y no lo igualo pq alteraria el registro
                         $producto->save();//se guardan cambios

                    }else{
                        throw new \Exception("No hay suficientes productos para hacer la cita con la tecnica: {$productoHasTecnica->tecnica->nombre}");
                    }
                }
            }

            $totalVenta = CitaHasServicio::where('citaId', $cita->id)
                ->sum('precioTecnica');

            Venta::where('id', $ventaId)->update([
                'fechaVenta' => $request->fechaCita,
                'total' => $totalVenta,
                'estadoVenta' => false
            ]);

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
            $cita = Cita::findOrFail($id);
            $usuario = $cita->usuario;

            $ventaId = $cita->ventaId;

            $productosDevolverStock = DetalleTecnicaProducto::where('citaId', $id)
            ->with('producto')
            ->get();

            foreach($productosDevolverStock as $productoDetalle){
                $cantidadPromedio = ProductoHasTecnica::where('tecnicaId', $productoDetalle->tecnicaId)
                    ->where('productoId', $productoDetalle->productoId)
                    ->value('cantidadDeUso');
                
                $producto = $productoDetalle->producto;
                if($producto) {
                    $producto->cantidadEnStock += 2 * $cantidadPromedio;
                    $producto->cantidadReserva -= $productoDetalle->cantidadProducto;
                    $producto->save();
                }
            }
            

            CitaHasServicio::where('citaId', $id)->delete();//eliminar relaciones
            DetalleTecnicaProducto::where('citaId', $id)->delete();


            $cita->delete();

            Venta::where('id', $ventaId)->delete();

            Mail::to($usuario->email)->send(new CorreoCancelacion($cita));

            DB::commit();
            return response()->json(['message' => 'Cita y venta eliminadas con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al eliminar la cita', 'error' => $e->getMessage()], 500);
        }
    }



    function RegistroDescuentoProducto(Request $request){

        DB::beginTransaction();

        try {
            $descuento = new Descuento();
            $descuento->cantidadDescuento = $request->cantidadDescuento;
            $descuento->save();

            //Arreglo con ids de los productos selecccionados
            $productos = $request->input('productos');

            $porcentajeDescuento = $descuento->cantidadDescuento / 100;

            foreach ($productos as $productoId) {
                $producto = Producto::find($productoId);
                if ($producto) {
                    // Aplicar el descuento al precio actual
                    $precioActual = $producto->precio;
                    $cantidadRestar = $precioActual * $porcentajeDescuento;
                    $nuevoPrecio = $precioActual - $cantidadRestar;

                    // Actualizar el precio de la técnica y el ID del descuento
                    $producto->precio = $nuevoPrecio;
                    $producto->descuentoId = $descuento->id;
                    $producto->save();
                }
            }

            DB::commit();
            return 'Descuento aplicado exitosamente';
        }catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

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

        try {
            $descuento = new Descuento();
            $descuento->cantidadDescuento = $request->cantidadDescuento;
            $descuento->save();

            $tecnicas = $request->input('tecnicas');

            $porcentajeDescuento = $descuento->cantidadDescuento / 100;

            foreach ($tecnicas as $tecnicaId) {
                $tecnica = Tecnica::find($tecnicaId);
                if ($tecnica) {
                    // Aplicar el descuento al precio actual
                    $precioActual = $tecnica->precio;
                    $cantidadRestar = $precioActual * $porcentajeDescuento;
                    $nuevoPrecio = $precioActual - $cantidadRestar;

                    // Actualizar el precio de la técnica y el ID del descuento
                    $tecnica->precio = $nuevoPrecio;
                    $tecnica->descuentoId = $descuento->id;
                    $tecnica->save();
                }
            }

            return 'descuento aplicado exitosamente';
        }catch (\Exception $e) {
            return $e->getMessage();
        }


    }





    public function RegistroCitaUsuario(Request $request)
    {
        $request->validate([
            'fechaCita' => 'required|date|after_or_equal:today',
            'horaCita' => 'required|date_format:H:i:s',
            'usuarioId' => 'required|exists:users,id',
            'empleadoId' => 'required|exists:users,id',
            'serviciosSeleccionados' => 'required|json'
        ], [
            'required' => 'Este campo es obligatorio.',
            'date' => 'La fecha no es válida.',
            'date_format' => 'El formato de la hora es inválido.',
            'after_or_equal' => 'La fecha debe ser hoy o posterior.',
            'json' => 'Los datos deben estar en formato JSON válido.',
        ]);//valida que entren esos datos en los formatos deseados

        $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);

        if (empty($serviciosSeleccionados)) {
            return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
        }

        //verificar si ya existe una cita con la misma fecha y hora
        $citaExistente = Cita::where('fechaCita', $request->fechaCita)
                            ->where('horaCita', $request->horaCita)
                            ->first();

        if ($citaExistente) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
        }

        DB::beginTransaction();
        try {
            $venta = Venta::create([
                'fechaVenta' => $request->fechaCita,
                'total' => 0,
                'estadoVenta' => false,
            ]);

            $cita = Cita::create([
                "fechaCita" => $request->fechaCita,
                "horaCita" => $request->horaCita,
                "usuarioId" => $request->usuarioId,
                "empleadoId" => $request->empleadoId,
                "notasCita" => $request->notasCita ?? null,
                "estadoCita" => false
            ]);

            foreach ($serviciosSeleccionados as $servicio) {
                $citaHasServicios = CitaHasServicio::create([
                    'citaId' => $cita->id,
                    'servicioId' => $servicio['servicioId'],
                    'tecnicaId' => $servicio['tecnicaId'],
                    'ventaId' => $venta->id,
                    'precioTecnica' => 0,
                ]);

                $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);

                $citaHasServicios->update([
                    'precioTecnica' => $tecnica->precio
                ]);

                foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {

                    $producto = $productoHasTecnica->producto;


                    if($producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso * 2){
                        $detalleProductos = DetalleTecnicaProducto::create([
                            'citaId' => $cita->id,
                            'tecnicaId' => $servicio['tecnicaId'],
                            'productoId' => $productoHasTecnica->productoId,
                            'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                        ]);

                        $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso * 2;
                        //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
                         $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso * 2;
                         //La cantidad se guarda en la reserva del producto por cualquier cancelacion o cualquier cosa
                         // se suma y no lo igualo pq alteraria el registro
                         $producto->save();//se guardan cambios

                    }else{
                        throw new \Exception("No hay suficientes productos para hacer la cita con la tecnica: {$productoHasTecnica->tecnica->nombre}");
                    }
                }
            }

            $totalVenta = CitaHasServicio::where('citaId', $cita->id)
                ->join('tecnicas', 'citas_has_servicios.tecnicaId', '=', 'tecnicas.id')
                ->sum('tecnicas.precio');

            $venta->update(['total' => $totalVenta]);

            Mail::to($request->user()->email)->send(new CorreoEspera($cita));

            // Enviar correo al empleado seleccionado
            $empleado = User::findOrFail($request->empleadoId);
            Mail::to($empleado->email)->send(new NotificarAdministrador($cita));

            // Enviar correo al administrador
            $administradorEmail = 'tuttibellistudiotrc@gmail.com';
            Mail::to($administradorEmail)->send(new NotificarAdministrador($cita));

            DB::commit();
            return response()->json(['message' => 'Cita creada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al crear la cita', 'error' => $e->getMessage()], 500);
        }
    }


    public function actualizarDetalleTecnica(Request $request)
    {
        $changes = $request->input('changes');
    
        if(empty($changes)){
            return response()->json(['message' => 'Arreglo vacío'], 400);
        }
    
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
    
                $cantidadPromedio = ProductoHasTecnica::where('tecnicaId', $detalleTecnica->tecnicaId)
                    ->where('productoId', $detalleTecnica->productoId)
                    ->value('cantidadDeUso');
    
                if ($cantidad < $cantidadPromedio) {
                    throw new \Exception("La cantidad proporcionada para el producto '{$producto->nombre}' tiene que ser mayor a: {$cantidadPromedio}");
                }
    
                if ($cantidad > $producto->cantidadReserva) {
                    throw new \Exception("La cantidad solicitada para el producto '{$producto->nombre}' excede la cantidad en reserva disponible.");
                }
    
                if ($cantidad > 2 * $cantidadPromedio) {
                    throw new \Exception("La cantidad solicitada para el producto '{$producto->nombre}' no puede exceder el doble de la cantidad promedio.");
                }
    
                $detalleTecnica->update(['cantidadProducto' => $cantidad]);
            }
    
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Cantidades actualizadas correctamente.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
    
    
    public function aceptarVentaEditarEstado(Request $request)
    {
        DB::beginTransaction();
        try {
            $venta = Venta::findOrFail($request->ventaId);
            $venta->update(['estadoVenta' => true]);
    
            $citaHasServicio = CitaHasServicio::where('ventaId', $venta->id)->firstOrFail();
            $cita = $citaHasServicio->cita;
    
            $detalleTecnicas = DetalleTecnicaProducto::where('citaId', $cita->id)->get();
    
            foreach ($detalleTecnicas as $detalle) {
                $producto = Producto::findOrFail($detalle->productoId);
                $cantidadPromedio = ProductoHasTecnica::where('tecnicaId', $detalle->tecnicaId)
                    ->where('productoId', $detalle->productoId)
                    ->value('cantidadDeUso');
    
                if ($producto->cantidadReserva < $detalle->cantidadProducto) {
                    DB::rollBack();
                    return response()->json(['message' => 'No hay suficiente stock en reserva para el producto ' . $producto->nombre], 400);
                }
    
                $cantidadDoble = $cantidadPromedio * 2;
                $diferencia = $cantidadDoble - $detalle->cantidadProducto;
    
                $producto->cantidadReserva -= $detalle->cantidadProducto;
                $producto->cantidadEnStock += $diferencia;
    
                $producto->save();
            }
    
            DB::commit();
            return response()->json(['message' => 'Venta aceptada y stock actualizado con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al aceptar la venta y actualizar el stock', 'error' => $e->getMessage()], 500);
        }
    }
    

}
