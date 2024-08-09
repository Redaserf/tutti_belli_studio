<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;


//Modelos
use App\Models\User;
use App\Models\Servicio;
use App\Models\Tecnica;
use App\Models\Cita;
use App\Models\CitaHasServicio;
use App\Models\ProductoHasTecnica;
use App\Models\Venta;
use App\Models\DetalleTecnicaProducto;


use DateTime;
use Illuminate\Support\Facades\Auth;

class ConsultasController extends Controller
{
    //

    public function vistaPrueba(){
        return view('pruebita');
    }

    //consulta para traer todos los usuarios con su respectivo nombre de rol 
    public function usuariosConSuRol()
    {
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {

            $usuarios = User::with(['roles'])->get();
            //roles es la funcion con el mismo nombre en el modelo User o sea la relacion
            //de roles a usuarios   
            // esto te trae todo lo de roles pudiendo maniipularlo con jquery                         
    
            return response()->json($usuarios);
            
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Home-empleado');
        }

    }

    public function usuariosConRolUsuario() // se trae los usuarios que tengan el rol de Usuario y Guest
    {
        $usuarios = User::whereHas('roles', function ($query) {
            $query->whereIn('nombre', ['Usuario', 'Guest']);
        })
        ->with('roles') 
        ->get()
        ->sortBy(function ($user) {
            // ordenar por rol: "Guest" primero y luego "Usuario"
            return $user->roles->first()->nombre === 'Guest' ? 0 : 1;
        });
    
        return response()->json($usuarios);
    }

    public function usuariosConRolEmpleado()//se trae los usuarios que tengan el rol de empleado
    {
            $usuarios = User::whereHas('roles', function ($query) {
                $query->where('nombre', 'Empleado');
            })->get();

            return response()->json($usuarios);
    }


    public function serviciosConTecnicas(){
        $servicioConTecnicas = Servicio::with(['tecnicas'])->get();

        return response()->json($servicioConTecnicas);
    }


    public function mostrarServiciosTecnicasCitas()    //muestra las citas en el calendario 
    {
        $citasHasServicios = CitaHasServicio::with(['cita' => function ($query) {
            $query->where('estadoCita', true);
        }, 'servicio', 'tecnica'])
        ->get();
        
        
        $citasGrouped = $citasHasServicios->groupBy('citaId');

        $events = [];

        foreach ($citasGrouped as $citaId => $group) {
            $primeraCita = $group->first();
            if ($primeraCita && $primeraCita->cita) {
                $cita = $primeraCita->cita;
                $serviciosTecnicas = $group->map(function ($item) {
                    return $item->servicio->nombre . ' - ' . $item->tecnica->nombre;
                })->join(', ');

                $fechaInicio = new DateTime($cita->fechaCita . ' ' . $cita->horaCita);
                $fechaFin = clone $fechaInicio;
                $fechaFin->modify('+60 minutes');

                $events[] = [
                    'id' => $citaId,
                    'title' => $cita->notasCita,
                    'start' => $fechaInicio->format('Y-m-d\TH:i:s'),
                    'end' => $fechaFin->format('Y-m-d\TH:i:s'),
                ];
            } else {
                Log::warning("No se encontró cita para el grupo con ID $citaId");
            }
        }
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }

        $user = Auth::user();
        if ($user->rolId == 4) {
            return view('Boss.Ver-Citas', compact('events'));
        } elseif ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Ver-Citas-Empleado');
        }
    }

    
    
    
    //creo que no se van a usar jaajaj

    // public function citasAceptadas() {
    //     // Obtener las citas con estado true y sus servicios relacionados
    //     $citas = Cita::where('estadoCita', true)->with('servicios')->get();
    
    //     // Devolver las citas como una respuesta JSON
    //     return response()->json($citas);
    // }

    // public function citasDenegadas() {
    //     // Obtener las citas con estado true y sus servicios relacionados
    //     $citas = Cita::where('estadoCita', false)->with('servicios')->get();
    
    //     // Devolver las citas como una respuesta JSON
    //     return response()->json($citas);
    // }


    // public function serviciosTecnicasCitas()
    // {
    //     $citasHasServicios = CitaHasServicio::with('cita', 'servicio', 'tecnica')->get();

    //     // Estructurar los datos para la respuesta
    //     $result = $citasHasServicios->groupBy('citaId')->map(function ($group) {
    //         $cita = $group->first()->cita;
    //         $servicios = $group->map(function ($item) {
    //             return [
    //                 'servicio' => $item->servicio,
    //                 'tecnica' => $item->tecnica
    //             ];
    //         });

    //         return [
    //             'cita' => $cita,
    //             'servicios' => $servicios
    //         ];
    //     });

    //     return response()->json($result->values());
    // }

    public function unaCitaConServiciosTecnica($id)
    {
        $cita = Cita::with(['servicios' => function($query) use ($id) {
            $query->where('citas_has_servicios.citaId', $id);
    
            $query->with(['tecnicas' => function($query) use ($id) {
                $query->join('citas_has_servicios', 'tecnicas.id', '=', 'citas_has_servicios.tecnicaId')
                      ->where('citas_has_servicios.citaId', $id)
                      ->select('tecnicas.*', 'citas_has_servicios.servicioId as pivot_servicioId');
            }]);
        }])->findOrFail($id);
        
        $result = [
            'cita' => $cita,
            'servicios' => $cita->servicios->map(function ($servicio) {
                $tecnica = $servicio->tecnicas->firstWhere('pivot_servicioId', $servicio->pivot->servicioId);
                return [
                    'id' => $servicio->id,
                    'nombre' => $servicio->nombre,
                    'tecnica' => $tecnica ? [
                        'id' => $tecnica->id,
                        'nombre' => $tecnica->nombre,
                        'precio' => $tecnica->precio,
                        'descripcion' => $tecnica->descripcion
                    ] : null
                ];
            })
        ];
    
        return response()->json($result);
    }
    
    
    
    
    //citas no aceptadas (citas de usuarios) con datos de su usuario y datos del empleado
    public function citasUsuariosEmpleados() {
        $fechaHoraActual = now()->setTimezone('America/Mexico_City');
    
        $citas = Cita::where('estadoCita', '=', false)
            ->where(function($query) use ($fechaHoraActual) {
                $query->where('fechaCita', '>', $fechaHoraActual->toDateString())
                      ->orWhere(function($query) use ($fechaHoraActual) {
                          $query->where('fechaCita', '=', $fechaHoraActual->toDateString())
                                ->where('horaCita', '>=', $fechaHoraActual->format('H:i:s'));
                      });
            })
            ->orderBy('fechaCita', 'ASC')
            ->with([
                'usuario' => function($usuario) {
                    $usuario->select(DB::raw("*, CONCAT(name, ' ', apellido) AS clienteNombreCompleto"), 'id');
                },
                'usuarioEmpleado' => function($empleado) {
                    $empleado->select(DB::raw("*, CONCAT(name, ' ', apellido) AS empleadoNombreCompleto"), 'id');
                },
                'servicios' => function($query) {
                    $query->with('tecnicas');
                }
            ])
            ->get();
    
        return response()->json($citas);
    }
    
    
    

    // public function tecnicasConCitas(){//hacer
    //     $tecnicasIds = CitaHasServicio::select('tecnicaId')->with('tecnica')->get();

    //     return response()->json($tecnicasIds);
    // }

 


//     //consulta para traerse las citas con sus tecnicas y los productos de las tecnicas de esas citas
//     public function serviciosTecnicasCitas(): JsonResponse
//     {
//         // Obtén las citas con sus técnicas y productos
//         $citas = CitaHasServicio::with('productosTecnicas.productoHasTecnica')->get();

//         // Prepara la estructura de datos para el JSON
//         $resultados = $citas->map(function ($cita) {
//             return [
//                 'cita_id' => $cita->id,
//                 'productos_tecnicas' => $cita->productosTecnicas->map(function ($productoTecnica) {
//                     return [
//                         'tecnica' => $productoTecnica->productoHasTecnica->tecnica->nombre ?? 'No disponible',
//                         'producto' => $productoTecnica->productoHasTecnica->producto->nombre ?? 'No disponible',
//                         'cantidad_producto' => $productoTecnica->cantidadProducto,
//                     ];
//                 }),
//             ];
//         });

//         // Retorna los resultados como JSON
//         return response()->json($resultados);
//     }


// //todas las citas con sus servicios, tecnicas y los productos de la tecnica 
//    public function tecnicasConProductos()
//    {
//        // Obtener citas con servicios, técnicas y productos relacionados
//        $citas = CitaHasServicio::with(['cita' => function ($query) {
//            $query->where('estadoCita', true);
//        }, 'servicio', 'tecnica.productos'])->get();
       
//        // Agrupar las citas por ID
//        $citasGrouped = $citas->groupBy('citaId');
   
//        $data = $citasGrouped->map(function ($group) {
//            // Obtener la primera cita del grupo
//            $primeraCita = $group->first()->cita;
   
//            // Crear detalles para cada técnica
//            $serviciosTecnicas = $group->map(function ($item) {
//                $tecnica = $item->tecnica;
//                $productos = $tecnica->productos->map(function ($producto) {
//                    return $producto->toArray(); // Devuelve todos los atributos del producto
//                });
   
//                return [
//                    'id' => $tecnica->id,
//                    'nombre' => $tecnica->nombre,
//                    'descripcion' => $tecnica->descripcion, // Incluye todos los atributos de la técnica
//                    'productos' => $productos
//                ];
//            });
   
//            return [
//                'id' => $primeraCita->id,
//                'fechaCita' => $primeraCita->fechaCita,
//                'horaCita' => $primeraCita->horaCita,
//                'estadoCita' => $primeraCita->estadoCita,
//                'notasCita' => $primeraCita->notasCita,
//                'usuarioId' => $primeraCita->usuarioId,
//                'empleadoId' => $primeraCita->empleadoId,
//                'ventaId' => $primeraCita->ventaId,
//                'servicios' => $group->map(function ($item) {
//                    return [
//                        'id' => $item->servicio->id,
//                        'nombre' => $item->servicio->nombre,
//                        // Incluye otros atributos del servicio si es necesario
//                    ];
//                })->unique(), // Asegúrate de tener servicios únicos
//                'tecnicas' => $serviciosTecnicas
//            ];
//        });
   
//        // Retornar los detalles de citas, servicios, técnicas y productos en formato JSON
//        return response()->json($data);
//    }

//    public function citasTecnicaProductos() {
//     $venta = Venta::with(['cita.servicios.tecnicas.productosHasTecnica.producto', 'cita.servicios.tecnicas.productosHasTecnica.detalleTecnica'])->get();

//     return response()->json($venta);
//    }
   
    

//    public function citasTecnicaProductos() {
//         $cita = 
//    }
    

// public function tecnicasProductos(){
//     $jaja = Tecnica::with('productosHasTecnica')->get();


//     return response()->json($jaja);
// }

// public function ventasCitas()
// {
//     $detalles = DetalleTecnicaProducto::with([
//         'cita.usuario',
//         'cita.usuarioEmpleado',
//         'tecnica.productosHasTecnica', // Incluye la relación productosHasTecnica
//         'cita.venta'
//     ])
//     ->whereHas('cita', function ($query) {
//         $query->where('estadoCita', true)
//               ->whereHas('venta', function ($ventaQuery) {
//                   $ventaQuery->where('estadoVenta', false); // Filtrar por estadoVenta false
//               });
//     })
//     ->get();
    
//     $citaIds = $detalles->pluck('cita.id')->unique();
    
//     $citasHasServicios = CitaHasServicio::with(['servicio', 'tecnica'])
//         ->whereIn('citaId', $citaIds)
//         ->get()
//         ->groupBy('citaId');
    
//     $detallesGrouped = $detalles->groupBy('citaId');

//     $formattedCitas = $detallesGrouped->map(function ($items) use ($citasHasServicios) {
//         $firstItem = $items->first();
//         $cita = $firstItem->cita;
//         $venta = $cita->venta;

//         // Obtener los servicios y técnicas para la cita actual
//         $serviciosTecnicas = $citasHasServicios->get($cita->id, collect())->map(function ($item) {
//             return [
//                 'servicio' => [
//                     'id' => $item->servicio->id,
//                     'nombre' => $item->servicio->nombre,
//                     'descripcion' => $item->servicio->descripcion,
//                 ],
//                 'tecnica' => [
//                     'id' => $item->tecnica->id,
//                     'nombre' => $item->tecnica->nombre,
//                     'precio' => $item->tecnica->precio,
//                     'descripcion' => $item->tecnica->descripcion,
//                 ]
//             ];
//         });

//         $tecnicas = $items->groupBy('tecnicaId')->map(function ($group) {
//             $tecnica = $group->first()->tecnica;
//             return [
//                 'id' => $tecnica->id,
//                 'nombre' => $tecnica->nombre,
//                 'precio' => $tecnica->precio,
//                 'descripcion' => $tecnica->descripcion,
//                 'productos' => $tecnica->productosHasTecnica->map(function ($productoHasTecnica) use ($group) {
//                     // Encuentra el detalle_tecnica_id para este producto
//                     $detalle = $group->firstWhere('productoId', $productoHasTecnica->productoId);
//                     return [
//                         'id' => $productoHasTecnica->id, // ID del productoHasTecnica
//                         'productoId' => $productoHasTecnica->productoId, // ID del producto
//                         'nombre' => $productoHasTecnica->producto->nombre,
//                         'precio' => $productoHasTecnica->producto->precio,
//                         'descripcion' => $productoHasTecnica->producto->descripcion,
//                         'cantidad' => $detalle ? $detalle->cantidadProducto : 0, // Usa la cantidad del detalle_tecnica
//                         'detalleTecnicaId' => $detalle ? $detalle->id : null, // Incluye el id del detalle_tecnica
//                         'inventarioId' => $productoHasTecnica->producto->inventarioId // Incluye el id del inventario
//                     ];
//                 })->toArray()
//             ];
//         })->values();

//         return [
//             'cita' => [
//                 'id' => $cita->id,
//                 'fechaCita' => $cita->fechaCita,
//                 'horaCita' => $cita->horaCita,
//                 'estadoCita' => $cita->estadoCita,
//                 'notasCita' => $cita->notasCita,
//                 'venta' => $venta ? [
//                     'id' => $venta->id,
//                     'total' => $venta->total,
//                     'fechaVenta' => $venta->fechaVenta,
//                     'estadoVenta' => $venta->estadoVenta,
//                 ] : null,
//                 'usuario' => [
//                     'id' => $cita->usuario->id,
//                     'nombre' => $cita->usuario->name,
//                     'apellido' => $cita->usuario->apellido,
//                 ],
//                 'empleado' => [
//                     'id' => $cita->usuarioEmpleado->id,
//                     'nombre' => $cita->usuarioEmpleado->name,
//                     'apellido' => $cita->usuarioEmpleado->apellido,
//                 ],
//                 'tecnicas' => $tecnicas,
//                 'serviciosTecnicas' => $serviciosTecnicas
//             ]
//         ];
//     });

//     // Retorna todas las citas con sus técnicas, servicios, usuario, empleado y productos asociadas
//     return response()->json($formattedCitas);
// }

public function ventasCitas()
{
    $fechaHoraActual = now()->setTimezone('America/Mexico_City');
    $fechaActual = $fechaHoraActual->toDateString();
    $horaActual = $fechaHoraActual->toTimeString();

    $ventas = CitaHasServicio::whereHas('venta', function ($query) {
            $query->where('estadoVenta', false);
        })
        ->with([
            'venta',
            'cita' => function ($query) use ($fechaActual, $horaActual) {
                $query->where('estadoCita', true)
                    ->where(function ($query) use ($fechaActual, $horaActual) {
                        $query->where('fechaCita', '<', $fechaActual)
                            ->orWhere(function ($query) use ($fechaActual, $horaActual) {
                                $query->where('fechaCita', '=', $fechaActual)
                                      ->where('horaCita', '<', $horaActual);
                            });
                    })
                    ->with('usuarioEmpleado')
                    ->with('servicios');
            }
        ])
        ->get()
        ->groupBy('citaId');

    $ventas = $ventas->map(function ($ventaMap) {
        $elemento = $ventaMap->first();
        $venta = $elemento->venta;
        $cita = $elemento->cita;

        if ($cita) {
            $cita->servicios->each(function ($servicio) use ($cita) {
                $tecnicas = $servicio->tecnica($cita->id)->get();
                $citaId = $cita->id;

                $tecnicas->each(function ($tecnica) use ($citaId) {
                    $productos = $tecnica->productos;

                    $productos->each(function ($producto) use ($tecnica, $citaId) {
                        $detalleTecnicaProductos = $this->obtenerDetalles($tecnica->id, $producto->id, $citaId)->getData(true);
                        $producto->detalleTecnicaProducto = $detalleTecnicaProductos;
                    });

                    $tecnica->productos = $productos;
                });

                $servicio->tecnicas = $tecnicas;
            });

            $cita->venta = $venta;
            return $cita;
        }
        return null;
    });

    return response()->json($ventas);
}




public function obtenerDetalles($tecnicaId, $productoId, $citaId)
{
    $detalleTecnicaProductos = DetalleTecnicaProducto::where('tecnicaId', $tecnicaId)
        ->where('productoId', $productoId)->where('citaId', $citaId)
        ->get();
    
    return response()->json($detalleTecnicaProductos);
}




    
}    
