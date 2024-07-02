<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicaHasCurso extends Model
{
    use HasFactory;

    protected $table = 'tecnicas_has_cursos';
    protected $primaryKey= 'id';

    protected $fillable = ['tecnicaId', 'cursoId'];

    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursoId');
    }

    public function tecnicas(){
        return $this->belongsTo(Tecnica::class, 'tecnicaId');
    }
}
