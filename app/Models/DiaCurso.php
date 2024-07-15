<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaCurso extends Model
{
    use HasFactory;

    protected $table = 'dias_cursos';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['fechaContinuacion', 'horaContinuacion', 'cursoId']; //fehca: yyyy-mm-dd  hora: hh-mm--ss

    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursoId');
    }
}
