<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//Modelos
use App\Models\User;
use App\Models\Servicio;
use App\Models\Tecnica;
use App\Models\Cita;
use App\Models\CitaHasServicio;

use DateTime;




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

    public function usuariosConRolUsuario()//se trae los usuarios que tengan el rol de usuario
    {
            $usuarios = User::whereHas('roles', function ($query) {
                $query->where('nombre', 'usuario');
            })->get();

            return response()->json($usuarios);
    }

    public function usuariosConRolEmpleado()//se trae los usuarios que tengan el rol de empleado
    {
            $usuarios = User::whereHas('roles', function ($query) {
                $query->where('nombre', 'empleado');
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
        $citasHasServicios = CitaHasServicio::with('cita', 'servicio', 'tecnica')->get();
        $citasGrouped = $citasHasServicios->groupBy('citaId');
        
        $events = [];
    
        foreach ($citasGrouped as $citaId => $group) {
            $cita = $group->first()->cita;
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
        }

    
    
        return view('Boss.Ver-Citas', compact('events'));
    }
    
    //

    public function citasAceptadas() {
        // Obtener las citas con estado true y sus servicios relacionados
        $citas = Cita::where('estadoCita', true)->with('servicios')->get();
    
        // Devolver las citas como una respuesta JSON
        return response()->json($citas);
    }


    public function serviciosTecnicasCitas()
    {
        $citasHasServicios = CitaHasServicio::with('cita', 'servicio', 'tecnica')->get();

        // Estructurar los datos para la respuesta
        $result = $citasHasServicios->groupBy('citaId')->map(function ($group) {
            $cita = $group->first()->cita;
            $servicios = $group->map(function ($item) {
                return [
                    'servicio' => $item->servicio,
                    'tecnica' => $item->tecnica
                ];
            });

            return [
                'cita' => $cita,
                'servicios' => $servicios
            ];
        });

        return response()->json($result->values());
    }

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
    
    
    
    
    
    

}
