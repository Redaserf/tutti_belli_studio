<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Cita;
use App\Models\CitaHasServicio;
use App\Models\Curso;
use App\Models\DetalleProducto;
use App\Models\Inscripcion;
use App\Models\Producto;
use App\Models\Inventario;
use App\Models\TecnicaHasCurso;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class DibujarController extends Controller
{
// =============================================================================================

    // ==========[ Obtener todos los productos ]==========
    function productosIndex(){
    $productos = Producto::all();
    return response()->json($productos);
    }
    // ==========[ Eliminar un producto ]==========
    function productoDelete($id){
    Producto::findOrFail($id)->delete();
    return response()->json(null, 204);
    }

    // ==========[ Obtener un producto por id ]==========
    public function obtenerProducto($id){
        $producto = Producto::find($id);
        if ($producto) {
            return response()->json($producto);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    // ==========[ Actualizar un producto ]==========
    public function actualizarProducto(Request $request, $id){

        $producto = Producto::find($id);

        if($producto->descuentoId){
            return 'Para cambiar los datos de un producto es necesario que este no cuente con un descuento';
        }

        if ($producto) {
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');

        if ($request->hasFile('imagenProducto')) {
            $producto->imagen = $request->file('imagenProducto')->store('imagenProducto', 'public');
        }

        $producto->save();

        return response()->json(['success' => 'Producto actualizado exitosamente']);
        } else {
        return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    public function actualizarProductoInv(Request $request, $id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $producto->nombre = $request->input('nombre');
            $producto->descripcion = $request->input('descripcion');
            $producto->cantidadEnStock = $request->input('cantidad');
            $producto->precio = $request->input('precio');

            if ($request->hasFile('imagenProducto')) {
                // Elimina la imagen antigua si existe
                if ($producto->imagen) {
                    Storage::disk('public')->delete($producto->imagen);
                }
                // Guarda la nueva imagen
                $producto->imagen = $request->file('imagenProducto')->store('imagenProducto', 'public');
            }

            $producto->save();

            return response()->json(['success' => 'Producto actualizado exitosamente']);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    // ==========[ obtener los productos sin descuento ]==========
    function productoSinDescuento()
    {
        $productos = Producto::where('descuentoId', '=', null)
            ->where('inventarioId', '=', 1)
            ->get();
        return response()->json($productos);
    }

    // ==========[ obtener los productos con descuento ]==========
    function productosConDescuento()
    {
        $productos = Producto::where('descuentoId', '>', 0)
            ->where('inventarioId', '=', 1)
            ->with(['inventario', 'descuento'])
            ->get();
        return response()->json($productos);

    }

// =============================================================================================

    // ==========[ Obtener todos los productos del carrito ]==========
    public function carritoIndex(){
        $user = Auth::user();
        $carrito = $user->carrito;

        if ($carrito) {
            $productos = $carrito->productos()->withPivot('id')->get();
            return response()->json($productos);
        } else {
            return response()->json(['error' => 'El usuario no tiene un carrito asociado'], 404);
        }
    }

    // ==========[ Agregar producto al carrito ]==========
    function carritoAgregar(Request $request){
        try {
            $user = Auth::user();
            $productId = $request->input('productId');
            $producto = Producto::find($productId);

            if ($producto) {
                $carrito = $user->carrito;

                if (!$carrito) {
                    $carrito = Carrito::create([
                        'usuarioId' => $user->id,
                        'costoTotal' => 0,
                    ]);
                }

                // Agregar el producto al carrito
                $carrito->productos()->attach($producto->id);

                // Actualizar el costo total del carrito
                $carrito->costoTotal += $producto->precio;
                $carrito->save();

                return response()->json(['success' => 'Producto agregado al carrito']);
            } else {
                return response()->json(['error' => 'Producto no encontrado'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error al agregar producto al carrito: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al agregar el producto al carrito'], 500);
        }
    }

    // ==========[ Eliminar un producto del carrito ]==========
    function carritoDelete($id){
        $user = Auth::user();
        $carrito = $user->carrito;

        if ($carrito) {
        // Asegurarse de eliminar la relación específica usando el id de la tabla pivote
        $carrito->productos()->wherePivot('id', $id)->detach();
            return response()->json(['success' => 'Producto eliminado del carrito']);
        } else {
            return response()->json(['error' => 'El carrito no existe'], 404);
        }
    }

// =============================================================================================

    // ==========[ Obtener todos los empleados ]==========
    function employeeIndex(){
    $empleados = User::where('rolId', 3)->get();
    return response()->json($empleados);
    }

    // ==========[ Eliminar un empleado ]==========
    function employeeDelete($id){
        try {
            $empleado = User::findOrFail($id);
            $empleado->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Server Error', 'error' => $e->getMessage()], 500);
        }
    }

// =============================================================================================

    // ==========[ Obtener todos los cursos ]==========
    function cursosIndex(){
        $cursos = Curso::with(['tecnicas', 'empleado'])->get();
        $usuarioId = Auth::id();

        // Ajusta la lógica para verificar si el usuario ya está inscrito en cada curso.
        $inscripciones = Inscripcion::where('usuarioId', $usuarioId)->pluck('cursoId')->toArray();

        $cursos = $cursos->map(function($curso) use ($inscripciones) {
            $curso->inscrito = in_array($curso->id, $inscripciones);
            return $curso;
        });

        return response()->json($cursos);
    }

    // ==========[ Editar un curso ]==========
    public function actualizarCurso(Request $request, $id){
        $curso = Curso::find($id);

        if ($curso) {
        $curso->nombre = $request->input('nombre');
        $curso->descripcion = $request->input('descripcion');
        $curso->precio = $request->input('precio');
        $curso->fechaInicio = $request->input('date');
        $curso->horaInicio = $request->input('hour');
        $curso->empleadoId = $request->input('empleadoId');

        if ($request->hasFile('imagenCurso')) {
            $curso->imagen = $request->file('imagenCurso')->store('imagenCurso', 'public');
        }

        $curso->save();

        return response()->json(['success' => 'Curso actualizado exitosamente']);
        } else {
        return response()->json(['error' => 'Curso no encontrado'], 404);
        }
    }

    // ==========[ Obtener un curso por id ]==========
    public function obtenerCurso($id){
        $curso = Curso::with('empleado')->find($id);
        $empleados = User::where('rolId', 3)->get();

        if ($curso) {
            return response()->json(['curso' => $curso, 'empleados' => $empleados]);
        } else {
            return response()->json(['error' => 'Curso no encontrado'], 404);
        }
    }

    // ==========[ Eliminar un curso ]==========
    public function cursosDelete($id) {
        DB::beginTransaction();
        try {
            $curso = Curso::findOrFail($id);
            $curso->inscripciones()->delete();
            $curso->empleado()->dissociate();
            $curso->tecnicas()->detach();

            $curso->delete();

            DB::commit();
            return response()->json(['success' => 'Curso eliminado con éxito.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Error al eliminar el curso: ' . $e->getMessage()], 500);
        }
    }

    // =============================================================================================

        // ==========[ Obtener las cosas que haya hecho el usuario ]==========
        public function historial(){
            $user = Auth::user();

            $citas = $user->citasUsuarios()->with('citasHasServicios.venta')->get();
            $inscripciones = $user->inscripciones()->with('cursos')->get();
            $ventas = $user->ventas;

            $historial = [
                'citas' => $citas,
                'inscripciones' => $inscripciones,
                'ventas' => $ventas
            ];

            return response()->json($historial);
        }

    // =============================================================================================

        // ==========[ Obtener servicio y técnica de una cita ]==========
        public function obtenerServicioTecnica($citaId){
            $cita = Cita::find($citaId);
            if ($cita) {
                $empleado = User::find($cita->empleadoId);
                $citaHasServicios = CitaHasServicio::where('citaId', $citaId)->with(['servicio', 'tecnica'])->get();

                return response()->json(['citaHasServicios' => $citaHasServicios, 'cita' => $cita, 'empleado' => $empleado]);
            } else {
                return response()->json(['error' => 'Cita no encontrada.'], 404);
            }
        }

        // ==========[ Obtener una inscripción y todo lo relacionado a esta ]==========
        public function index($inscripcionId){
            $inscripcion = Inscripcion::find($inscripcionId);
            if ($inscripcion){
                $curso = Curso::find($inscripcion->cursoId);
                $tecnicas = TecnicaHasCurso::where('cursoId', $curso->id)->with(['tecnicas'])->get();
                $empleado = User::find($curso->empleadoId);

                return response()->json(['curso' => $curso, 'empleado' => $empleado, 'tecnicas' => $tecnicas, 'inscripcion' => $inscripcion]);
            } else {
                return response()->json(['error' => 'Inscripción no encontrada.'], 404);
            }
        }

        // ==========[ Obtener los productos que estén en la venta de un usuario ]==========
        public function indexProductos($ventaId){
            $venta = Venta::find($ventaId);
            if ($venta){
                $detalleProductos = DetalleProducto::where('ventaId', $venta->id)->with(['producto'])->get();

                return response()->json(['venta' => $venta, 'producto' => $detalleProductos]);
            } else {
                return response()->json(['error' => 'Venta de productos no encontrada.'], 404);
            }
        }

}
