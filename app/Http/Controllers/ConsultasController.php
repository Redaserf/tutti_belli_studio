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

    //muestra las citas en el calendario 

    public function mostrarServiciosTecnicasCitas()
    {
        $citasHasServicios = CitaHasServicio::with(['cita' => function ($query) {
            $query->where('estadoCita', true);
        }, 'servicio', 'tecnica'])->get();
        
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
                    'title' => $serviciosTecnicas,
                    'start' => $fechaInicio->format('Y-m-d\TH:i:s'),
                    'end' => $fechaFin->format('Y-m-d\TH:i:s'),
                ];
            } else {
                // Manejar el caso donde no hay cita
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
        // Obtener la cita específica con sus servicios y técnicas
        $cita = Cita::with(['servicios' => function($query) use ($id) {
            $query->with(['tecnicas' => function($query) use ($id) {
                $query->join('citas_has_servicios', 'tecnicas.id', '=', 'citas_has_servicios.tecnicaId')
                      ->where('citas_has_servicios.citaId', $id)
                      ->select('tecnicas.*', 'citas_has_servicios.servicioId as pivot_servicioId');
            }]);
        }])->findOrFail($id);
        
        // Preparar la respuesta
        $result = [
            'cita' => $cita,
            'servicios' => $cita->servicios->map(function ($servicio) {
                // Obtener la técnica específica para este servicio en esta cita
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
        $citas = Cita::where('estadoCita', '=', false)->orderBy('fechaCita', 'ASC')->with(['usuario' => function($usuario) {
            $usuario->select(DB::raw("*,CONCAT(name, ' ', apellido) AS clienteNombreCompleto"), 'id');
        }, 'usuarioEmpleado' => function($empleado) {
            $empleado->select(DB::raw("*,CONCAT(name, ' ', apellido) AS empleadoNombreCompleto"), 'id');

        }])->get();

        return response()->json($citas);// falta que la consulta se traiga servicios y tecnicas de cada servicio
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
    

public function tecnicasProductos(){
    $jaja = Tecnica::with('productosHasTecnica')->get();


    return response()->json($jaja);
}

   // Traer ventas de todas las citas

   public function ventasCitas(){
        $ventasCitas = Venta::with('cita')->get();

        return response()->json($ventasCitas);
    }
}    
