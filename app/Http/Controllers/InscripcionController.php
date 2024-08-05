<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InscripcionController extends Controller
{
    public function inscribirse(Request $request)
    {
        $request->validate([
            'cursoId' => 'required|exists:cursos,id',
        ]);

        $inscripcion = Inscripcion::create([
            'fechaInscripcion' => now(),
            'estado' => false,
            'usuarioId' => Auth::id(),
            'cursoId' => $request->cursoId,
        ]);

        return response()->json(['success' => true, 'message' => 'Inscripción realizada con éxito.']);
    }

    public function getInscripciones($cursoId)
    {
    $inscripciones = Inscripcion::where('cursoId', $cursoId)->with('usuarios')->get();
    $curso = Curso::find($cursoId);

    return response()->json(['inscripciones' => $inscripciones, 'curso' => $curso]);
    }

    public function index($inscripcionId)
    {
        $inscripcion = Inscripcion::where('id', $inscripcionId)->with('usuarios')->first();
        return response()->json($inscripcion);
    }

    public function actualizarInscripcion(Request $request, $id){
        $inscripcion = Inscripcion::find($id);

        if ($inscripcion) {
            $inscripcion->estado = $request->input('estado');
            $inscripcion->save();
    
            return response()->json(['success' => 'Inscripción actualizada con éxito']);
        } else {
            return response()->json(['error' => 'Inscripción no encontrada'], 404);
        }
    }
}
