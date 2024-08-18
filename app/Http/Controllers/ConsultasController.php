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
use App\Models\Horario;
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

        $usuarios = User::with(['roles'])->get();
        //roles es la funcion con el mismo nombre en el modelo User o sea la relacion
        //de roles a usuarios   
        // esto te trae todo lo de roles pudiendo maniipularlo con jquery                         

        return response()->json($usuarios);
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


    public function usuarioGuest() // se trae los usuarios que tengan Guest
    {
        $usuarios = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();
    
        return response()->json($usuarios);
    }

    public function usuariosConRolEmpleado()
    {
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();


    
        // Trae el usuario logueado junto con los usuarios que tienen los roles de 'Empleado' o 'Administrador'
        $usuarios = User::WhereHas('roles', function ($query) {
                $query->whereIn('nombre', ['Empleado', 'Administrador']);
            })
            ->get();
    
        return response()->json($usuarios);
    }
    

    public function usuarioEmpleado()//se trae los usuarios que tengan el rol de empleado y admin
    {

        
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        }
        // } elseif ($user->rolId == 4) {
        //     return redirect('/Ver-Citas');
        // }

            $usuarios = User::whereHas('roles', function ($query) {
                $query->whereIn('nombre', ['Empleado', 'Administrador']);
            })->where('id', $user->id)->get();

            return response()->json($usuarios);
    }


    public function serviciosConTecnicas(){
        $servicioConTecnicas = Servicio::with(['tecnicas'])->get();

        return response()->json($servicioConTecnicas);
    }


    public function mostrarServiciosTecnicasCitas()    // Muestra las citas en el calendario
    {
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 3) {
            return redirect('/Ver-Citas-Empleado');
        }
    
        $fechaHoraActual = now()->setTimezone('America/Mexico_City');
        
    
        $citasHasServicios = CitaHasServicio::with(['cita' => function ($query) use ($user, $fechaHoraActual) {
            $query->where('estadoCita', true)
                  ->where('empleadoId', $user->id)
                  ->where(function($query) use ($fechaHoraActual) {
                      $query->where('fechaCita', '>', $fechaHoraActual->toDateString())
                            ->orWhere(function($query) use ($fechaHoraActual) {
                                $query->where('fechaCita', $fechaHoraActual->toDateString())
                                      ->where('horaCita', '>', $fechaHoraActual->format('H:i:s'));
                            });
                  });
        }])->get();
    
        $citasGrouped = $citasHasServicios->groupBy('citaId');
    
        $events = [];
    
        foreach ($citasGrouped as $citaId => $group) {
            $primeraCita = $group->first();
            if ($primeraCita && $primeraCita->cita) {
                $cita = $primeraCita->cita;
    
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
    
        if ($user->rolId == 4) {
            return view('Boss.Ver-Citas', compact('events'));
        }
    
        return redirect('/Home-guest'); // Redirige si no tiene el rol adecuado
    }
    
    

    
    
    public function mostrarServiciosTecnicasCitasEmpleado()
    {
        $fechaHoraActual = now()->setTimezone('America/Mexico_City');
    
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        } elseif ($user->rolId == 4) {
            return redirect('/Ver-Citas');
        }
    
        $citasEmpleado = [];
    
        $citasHasServicios = CitaHasServicio::with(['cita' => function ($query) use ($user, $fechaHoraActual) {
            $query->where('estadoCita', true)
                  ->where('empleadoId', $user->id)
                  ->where(function($query) use ($fechaHoraActual) {
                      $query->where('fechaCita', '>', $fechaHoraActual->toDateString())
                            ->orWhere(function($query) use ($fechaHoraActual) {
                                $query->where('fechaCita', $fechaHoraActual->toDateString())
                                      ->where('horaCita', '>', $fechaHoraActual->format('H:i:s'));
                            });
                  });
        }, 'servicio', 'tecnica'])->get();
    
        $citasGrouped = $citasHasServicios->groupBy('citaId');
    
        foreach ($citasGrouped as $citaId => $group) {
            $primeraCita = $group->first();
            if ($primeraCita && $primeraCita->cita) {
                $cita = $primeraCita->cita;
    
                $fechaInicio = new DateTime($cita->fechaCita . ' ' . $cita->horaCita);
                $fechaFin = clone $fechaInicio;
                $fechaFin->modify('+60 minutes');
    
                $citasEmpleado[] = [
                    'id' => $citaId,
                    'title' => $cita->notasCita,
                    'start' => $fechaInicio->format('Y-m-d\TH:i:s'),
                    'end' => $fechaFin->format('Y-m-d\TH:i:s'),
                ];
            } else {
                Log::warning("No se encontró cita para el grupo con ID $citaId");
            }
        }
    
        if ($user->rolId == 3) {
            return view('Employee.Ver-Citas-Empleado', ['citasEmpleado' => $citasEmpleado]);
        }
    
        return redirect('/Home-guest'); // Redirige si no tiene el rol adecuado
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
        }])->with('usuario')->with('usuarioEmpleado.horarios')->findOrFail($id);
        
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


    public function citasUsuariosEmpleadosPorEmpleado() {//citas pendientes de cada empleado
        $fechaHoraActual = now()->setTimezone('America/Mexico_City');

        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        }
    
        $citas = Cita::where('estadoCita', '=', false)->where('empleadoId', $user->id)
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
    
        $ventas = $ventas->filter(function ($cita) {
            return !is_null($cita);
        });
    
        return response()->json($ventas);
    }
    


    public function ventasCitasAceptadas()
    {
        $fechaHoraActual = now()->setTimezone('America/Mexico_City');
        $fechaActual = $fechaHoraActual->toDateString();
        $horaActual = $fechaHoraActual->toTimeString();
    
        $ventas = CitaHasServicio::whereHas('venta', function ($query) {
            $query->where('estadoVenta', true);
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
    
        $ventas = $ventas->filter(function ($cita) {
            return !is_null($cita);
        });
        return response()->json($ventas);
    }


    public function ventasCitasEmpleadoAdmin()
    {
        if (!Auth::check()) {
            return redirect('/Home-guest');
        }
    
        $user = Auth::user();
    
        if ($user->rolId == 2) {
            return redirect('/Home-usuario');
        }
    
        $fechaHoraActual = now()->setTimezone('America/Mexico_City');
        $fechaActual = $fechaHoraActual->toDateString();
        $horaActual = $fechaHoraActual->toTimeString();
    
        $ventas = CitaHasServicio::whereHas('venta', function ($query) {
            $query->where('estadoVenta', false);
        })
        ->with([
            'venta',
            'cita' => function ($query) use ($user, $fechaActual, $horaActual) {
                $query->where('empleadoId', $user->id)
                    ->where('estadoCita', true)
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
    
        $ventas = $ventas->filter(function ($cita) {
            return !is_null($cita);
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




    public function horarioEmpleadoLogeado(){
        $user = Auth::user();
    
        // Traer el usuario con sus horarios y citas
        $jaja = User::with(['horarios', 'citasEmpleados' =>  function($cita) {
            $cita->where('estadoCita', '<>', null);
        }])->where('id', $user->id)->get();
    
        return response()->json($jaja);
    }

       
    public function todasCitasEmpleados()//mo importa el estado
    {
        $citasHasServicios = CitaHasServicio::with(['cita.usuarioEmpleado', 'cita.usuario', 'servicio'])
            ->get();
    
        $citasGrouped = $citasHasServicios->groupBy('citaId');
    
        $result = $citasGrouped->map(function ($citaGroup) {
            $cita = $citaGroup->first()->cita;
    
            return [
                'citaId' => $cita->id,
                'fechaCita' => $cita->fechaCita,
                'horaCita' => $cita->horaCita,
                'notasCita' => $cita->notasCita,
                'estadoCita' => $cita->estadoCita,
                'usuarioEmpleado' => $cita->usuarioEmpleado,
                'usuario' => $cita->usuario,
                'servicios' => $citaGroup->map(function ($item) use ($cita) {
                    $tecnicas = $item->servicio->tecnica($cita->id)->get();
    
                    return [
                        'servicioId' => $item->servicio->id,
                        'nombreServicio' => $item->servicio->nombre,
                        'tecnicas' => $tecnicas->map(function ($tecnica) {
                            return [
                                'tecnicaId' => $tecnica->id,
                                'nombre' => $tecnica->nombre,
                            ];
                        }),
                    ];
                }),
            ];
        });
    
        return response()->json($result);
    }
    

    public function horarioUnEmpleado($id)
    {
        $empleado = User::with(['horarios', 'citasEmpleados' => function($cita) {
            $cita->where('estadoCita', '<>', null);
        }])->where('id', $id)->get();
    
        return response()->json($empleado);
    }
    

}    
