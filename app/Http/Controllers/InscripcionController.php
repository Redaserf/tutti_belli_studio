<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscripcionAceptada;

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

    public function actualizarInscripcion(Request $request, $id)
{
    // Cargar la inscripción junto con el usuario utilizando la relación 'usuarios'
    $inscripcion = Inscripcion::with('usuarios')->find($id);

    if ($inscripcion) {
        $inscripcion->estado = $request->input('estado');
        $inscripcion->save();

        // Verificar que el usuario no sea null antes de intentar enviar el correo
        if ($inscripcion->estado == 1 && $inscripcion->usuarios) { // 1 representa 'Aceptado'
            Mail::to($inscripcion->usuarios->email)->send(new InscripcionAceptada($inscripcion->usuarios, $inscripcion));
        }

        return response()->json(['success' => 'Inscripción actualizada con éxito y correo enviado']);
    } else {
        return response()->json(['error' => 'Inscripción no encontrada'], 404);
    }
}


}
