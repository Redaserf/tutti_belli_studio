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


                    if($producto->cantidadEnStock + $producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso){       
                        $detalleProductos = DetalleTecnicaProducto::create([
                            'citaId' => $cita->id,
                            'tecnicaId' => $servicio['tecnicaId'],
                            'productoId' => $productoHasTecnica->productoId,
                            'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                        ]);
                        $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso;
                        //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
                         $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso;
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


    // public function RegistroCitaEmpleado(Request $request) {
    //     $request->validate([
    //         'fechaCita' => 'required|date',
    //         'horaCita' => 'required|date_format:H:i:s',
    //         'usuarioId' => 'required|exists:users,id',
    //         'empleadoId' => 'required|exists:users,id',
    //         'serviciosSeleccionados' => 'required|json'
    //     ]);
    
    //     $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);

    
    //     if (empty($serviciosSeleccionados)) {
    //         return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
    //     }
    
    //     foreach ($serviciosSeleccionados as $servicio) {
    //         if (!isset($servicio['servicioId']) || !isset($servicio['tecnicaId'])) {
    //             return response()->json(['message' => 'Formato de servicio seleccionado incorrecto'], 400);
    //         }
    //     }

    //     if (!Auth::check()) {
    //         return redirect('/Home-guest');
    //     }
    
    //     $user = Auth::user();
    
    //     if ($user->rolId == 2) {
    //         return redirect('/Home-usuario');
    //     } elseif ($user->rolId == 4) {
    //         return redirect('/Ver-Citas');
    //     }
    
    //     $citaExistente = Cita::where('empleadoId', $user->id)->where('fechaCita', $request->fechaCita)
    //     ->where('horaCita', $request->horaCita)
    //     ->first();
    
    //     if ($citaExistente) {
    //         return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
    //     }
    
    //     DB::beginTransaction();
    //     try {
    //         $venta = Venta::create([
    //             'fechaVenta' => $request->fechaCita,
    //             'total' => 0,
    //             'estadoVenta' => false,
    //         ]);
    
    //         $cita = Cita::create([
    //             "fechaCita" => $request->fechaCita,
    //             "horaCita" => $request->horaCita,
    //             "usuarioId" => $request->usuarioId,
    //             "empleadoId" => $request->empleadoId,
    //             "notasCita" => $request->notasCita,
    //             "estadoCita" => true
    //         ]);
    
    //         foreach ($serviciosSeleccionados as $servicio) {
    //             $citaHasServicios = CitaHasServicio::create([
    //                 'citaId' => $cita->id,
    //                 'servicioId' => $servicio['servicioId'],
    //                 'tecnicaId' => $servicio['tecnicaId'],
    //                 'ventaId' => $venta->id,
    //                 'precioTecnica' => 0,
    //             ]);
    
    //             $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);

    //             $citaHasServicios->update([
    //                 'precioTecnica' => $tecnica->precio
    //             ]);
    
    //             foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {

    //                 $producto = $productoHasTecnica->producto;


    //                 if($producto->cantidadEnStock + $producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso){       
    //                     $detalleProductos = DetalleTecnicaProducto::create([
    //                         'citaId' => $cita->id,
    //                         'tecnicaId' => $servicio['tecnicaId'],
    //                         'productoId' => $productoHasTecnica->productoId,
    //                         'cantidadProducto' => $productoHasTecnica->cantidadDeUso
    //                     ]);
    //                     $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso;
    //                     //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
    //                      $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso;
    //                      //La cantidad se guarda en la reserva del producto por cualquier cancelacion o cualquier cosa
    //                      // se suma y no lo igualo pq alteraria el registro
    //                      $producto->save();//se guardan cambios
                         
    //                 }else{
    //                     throw new \Exception("No hay suficientes productos para hacer la cita con la tecnica: {$productoHasTecnica->tecnica->nombre}");
    //                 }
    //             }
    //         }
    
    //         $totalVenta = CitaHasServicio::where('citaId', $cita->id)
    //             ->join('tecnicas', 'citas_has_servicios.tecnicaId', '=', 'tecnicas.id')
    //             ->sum('tecnicas.precio');
    
    //         $venta->update(['total' => $totalVenta]);
    
    //         DB::commit();
    //         return response()->json(['message' => 'Cita creada con éxito'], 200);
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return response()->json(['message' => 'Error al crear la cita', 'error' => $e->getMessage()], 500);
    //     }
    // }

    
    
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


                    if($producto->cantidadEnStock + $producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso){       
                        $detalleProductos = DetalleTecnicaProducto::create([
                            'citaId' => $cita->id,
                            'tecnicaId' => $servicio['tecnicaId'],
                            'productoId' => $productoHasTecnica->productoId,
                            'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                        ]);
                        $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso;
                        //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
                         $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso;
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
    
    // public function editarCitaEmpleado(Request $request, $id) {
    //     $validatedData = $request->validate([
    //         'fechaCita' => 'required|date',
    //         'horaCita' => 'required|date_format:H:i:s',
    //         'usuarioId' => 'required|exists:users,id',
    //         'empleadoId' => 'required|exists:users,id',
    //         'notasCita' => 'nullable|string',
    //         'serviciosSeleccionados' => 'required|json'
    //     ]);
    
    //     $serviciosSeleccionados = json_decode($request->serviciosSeleccionados, true);
    
    //     if (empty($serviciosSeleccionados)) {
    //         return response()->json(['message' => 'Debe seleccionar al menos un servicio'], 400);
    //     }
    //     if (!Auth::check()) {
    //         return redirect('/Home-guest');
    //     }
    
    //     $user = Auth::user();
    
    //     if ($user->rolId == 2) {
    //         return redirect('/Home-usuario');
    //     } elseif ($user->rolId == 4) {
    //         return redirect('/Ver-Citas');
    //     }
    
    //     $citaExistente = Cita::where('empleadoId', $user->id)->where('fechaCita', $request->fechaCita)
    //     ->where('horaCita', $request->horaCita)
    //     ->first();
    
    //     if ($citaExistente) {
    //         return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 400);
    //     }
    
    //     DB::beginTransaction();
    //     try {
    //         $cita = Cita::findOrFail($id);
    
    //         $cita->update([
    //             "fechaCita" => $request->fechaCita,
    //             "horaCita" => $request->horaCita,
    //             "usuarioId" => $request->usuarioId,
    //             "empleadoId" => $request->empleadoId,
    //             "notasCita" => $request->notasCita,
    //             "estadoCita" => true
    //         ]);
    
    //         $ventaId = CitaHasServicio::where('citaId', $id)->value('ventaId');
    
    //         $productosDevolverStock = DetalleTecnicaProducto::where('citaId', $id)
    //         ->with('producto')  
    //         ->get();

    //         foreach($productosDevolverStock as $productoDetalle){//devuelve el stock de los productos de las tecnicas anteriores
    //             $producto = $productoDetalle->producto;
    //             if($producto) {
    //                 $producto->cantidadEnStock += $productoDetalle->cantidadProducto;
    //                 $producto->cantidadReserva -= $productoDetalle->cantidadProducto;
    //                 $producto->save();
    //             }
    //         }


    //         CitaHasServicio::where('citaId', $id)->delete();//eliminar relaciones
    //         DetalleTecnicaProducto::where('citaId', $id)->delete();
            
    //         foreach ($serviciosSeleccionados as $servicio) {
    //             $citaHasServicios = CitaHasServicio::create([
    //                 'citaId' => $cita->id,
    //                 'servicioId' => $servicio['servicioId'],
    //                 'tecnicaId' => $servicio['tecnicaId'],
    //                 'ventaId' => $ventaId,
    //                 'precioTecnica' => 0,
    //             ]);
    
    //             $tecnica = Tecnica::with('productosHasTecnica')->findOrFail($servicio['tecnicaId']);

    //             $citaHasServicios->update([
    //                 'precioTecnica' => $tecnica->precio
    //             ]);
    
    //             foreach ($tecnica->productosHasTecnica as $productoHasTecnica) {

    //                 $producto = $productoHasTecnica->producto;


    //                 if($producto->cantidadEnStock + $producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso){       
    //                     $detalleProductos = DetalleTecnicaProducto::create([
    //                         'citaId' => $cita->id,
    //                         'tecnicaId' => $servicio['tecnicaId'],
    //                         'productoId' => $productoHasTecnica->productoId,
    //                         'cantidadProducto' => $productoHasTecnica->cantidadDeUso
    //                     ]);
    //                     $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso;
    //                     //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
    //                      $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso;
    //                      //La cantidad se guarda en la reserva del producto por cualquier cancelacion o cualquier cosa
    //                      // se suma y no lo igualo pq alteraria el registro
    //                      $producto->save();//se guardan cambios
                         
    //                 }else{
    //                     throw new \Exception("No hay suficientes productos para hacer la cita con la tecnica: {$productoHasTecnica->tecnica->nombre}");
    //                 }
    //             }
    //         }
    
    //         $totalVenta = CitaHasServicio::where('citaId', $cita->id)
    //             ->sum('precioTecnica');
    
    //         Venta::where('id', $ventaId)->update([
    //             'fechaVenta' => $request->fechaCita,
    //             'total' => $totalVenta,
    //             'estadoVenta' => false
    //         ]);
    
    //         Mail::to($cita->usuario->email)->send(new CorreoConfirmacion($cita));
    
    //         DB::commit();
    //         return response()->json(['message' => 'Cita actualizada con éxito'], 200);
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return response()->json(['message' => 'Error al actualizar la cita', 'error' => $e->getMessage()], 500);
    //     }
    // }
    
    
    
    

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
                $producto = $productoDetalle->producto;
                if($producto) {
                    $producto->cantidadEnStock += $productoDetalle->cantidadProducto;
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


                    if($producto->cantidadEnStock + $producto->cantidadEnStock >= $productoHasTecnica->cantidadDeUso){       
                        $detalleProductos = DetalleTecnicaProducto::create([
                            'citaId' => $cita->id,
                            'tecnicaId' => $servicio['tecnicaId'],
                            'productoId' => $productoHasTecnica->productoId,
                            'cantidadProducto' => $productoHasTecnica->cantidadDeUso
                        ]);
                        $producto->cantidadEnStock -= $productoHasTecnica->cantidadDeUso;
                        //Se le resta la cantidad promedio que se usa en la tecnica al stock de cada producto
                         $producto->cantidadReserva += $productoHasTecnica->cantidadDeUso;
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
    
            DB::commit();
            return response()->json(['message' => 'Cita creada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al crear la cita', 'error' => $e->getMessage()], 500);
        }
    }
    

    public function actualizarDetalleTecnica(Request $request)
{
    // $request->validate([
    //     'changes.*' => 'required|integer|min:1',//verifica que todos los cambios sean positivos o que no sea cero
    // ]);

    $changes = $request->input('changes');

    $cambiosArray = $request->changes;
    if(empty($cambiosArray)){
        return response()->json(['message' => 'Arreglo vacio'], 400);
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


            //obtener la cantidad actual en detalleTecnicaProducto
            $cantidadActual = $detalleTecnica->cantidadProducto;
            $cantidadPromedio = ProductoHasTecnica::where('tecnicaId', $detalleTecnica->tecnicaId)
            ->where('productoId', $detalleTecnica->productoId)->value('cantidadDeUso');
            //Esto es para validar que no se usa el doble de la cantidad promedio, eso nos dijo el cliente
            $count = 0; 

            if($cantidad < $cantidadPromedio){
                throw new \Exception("La cantidad proporcionada por el producto '{$producto->nombre}' tiene que ser mayor a: {$cantidadPromedio}");

            }

           

            if ($cantidad > $producto->cantidadEnStock) {
                throw new \Exception("La cantidad solicitada para el producto '{$producto->nombre}' excede el stock disponible.");
            }

            if ($cantidad > 2 * $cantidadPromedio) {
                throw new \Exception("La cantidad solicitada para el producto '{$producto->nombre}' no puede exceder el doble de la cantidad promedio");
            }
            $producto->cantidadReserva -= $cantidadActual;//a la reserva le quitas la cantidad que estaba anteriormente
            //La cantidad antigua es la cantidad promedio si es que no se habia editado antes
            $producto->cantidadEnStock += $cantidadActual;//devuelve la cantidad antigua al stock

            $producto->cantidadReserva += $cantidad;//le metes la nueva
            $producto->cantidadEnStock -= $cantidad;//resta del stock la cantidad nueva
            $producto->save(); 
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
            
                    if ($producto->cantidadReserva < $detalle->cantidadProducto) {
                        DB::rollBack();
                        return response()->json(['message' => 'No hay suficiente stock para el producto ' . $producto->nombre], 400);
                    }
            
                    $producto->cantidadReserva -= $detalle->cantidadProducto;//Se resta a la reserva 
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