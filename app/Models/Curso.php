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

    protected $fillable = ['nombre', 'cupoLimite', 'fechaInicio', 'segundaFecha', 'terceraFecha', 'horaInicio', 'precio', 'imagen','descripcion', 'empleadoId', 'descuentoId'];


    public function empleado(){
        return $this->belongsTo(User::class, 'empleadoId');
    }

    public function tecnicas() {
        return $this->belongsToMany(Tecnica::class, 'tecnicas_has_cursos', 'cursoId', 'tecnicaId');
    }

    public function diasCursos() {
        return $this->hasMany(DiaCurso::class);
    }


    public function inscripciones(){
        return $this->hasMany(Inscripcion::class, 'cursoId');
    }


    public function productoHasCurso(){
        return $this->hasMany(ProductoHasCurso::class, 'cursoId');
    }
}
