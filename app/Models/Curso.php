<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['nombre', 'cupoLimite', 'fechaInicio', 'precio', 'empleadoId', 'descuentoId'];


    public function usuariosEmpleados(){
        return $this->belongsTo(User::class, 'empleadoId');
    }

    public function diasCursos() {
        return $this->hasMany(DiaCurso::class);
    }


    public function inscripciones(){
        return $this->hasMany(Inscripcion::class);
    }

    public function tecnicasHasCursos(){
        return $this->hasMany(TecnicaHasCurso::class);
    }
}
