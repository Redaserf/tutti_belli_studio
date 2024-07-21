<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TecnicaHasCurso;
use Illuminate\Http\Request;

class TecnicaHasCursoController extends Controller
{
    public function store(Request $request)
    {
        $cursoId = $request->input('cursoId');
        $tecnicas = $request->input('tecnicas');

        // Validar los datos
        $request->validate([
            'cursoId' => 'required|exists:cursos,id',
            'tecnicas' => 'required|array',
            'tecnicas.*' => 'exists:tecnicas,id',
        ]);

        // Guardar las técnicas seleccionadas para el curso
        foreach ($tecnicas as $tecnicaId) {
            TecnicaHasCurso::create([
                'cursoId' => $cursoId,
                'tecnicaId' => $tecnicaId,
            ]);
        }

        return response()->json(['success' => 'Técnicas guardadas exitosamente.']);
    }
}
