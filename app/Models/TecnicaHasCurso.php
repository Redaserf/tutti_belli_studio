<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicaHasCurso extends Model
{
    use HasFactory;

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $table = 'tecnicas_has_cursos';
    protected $primaryKey= 'id';

    protected $fillable = ['tecnicaId', 'cursoId'];

    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursoId', 'id');
    }

    public function tecnicas(){
        return $this->belongsTo(Tecnica::class, 'tecnicaId', 'id');
    }
}
