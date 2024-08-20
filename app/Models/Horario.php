<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'diaSemana',
        'horaInicio',
        'horaFin'
    ];
    use HasFactory;

    public function empleadoHasHorario(){
        return $this->hasMany(EmpleadoHasHorario::class, 'horarioId');
    }

    public function horariosEmpleado(){
        return $this->belongsToMany(User::class, 'empleados_has_horarios', 'horarioId', 'empleadoId');
    }
}
