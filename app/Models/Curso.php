<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey= 'id';

    protected $fillable = ['nombre', 'cupoLimite', 'fechaInicio', 'precio', 'empleadoid', 'descuentoId'];

    
    public function usuariosEmpleados(){
        return $this->belongsTo(Usuario::class, 'empleadoId');
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
