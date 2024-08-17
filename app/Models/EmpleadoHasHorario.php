<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoHasHorario extends Model
{
    use HasFactory;

    protected $table = 'empleados_has_horarios';
    protected $primaryKey = 'id';

    protected $fillable = ['empleadoId', 'horarioId'];

    public function empleados() {
        return $this->belongsTo(User::class, 'empleadoId');
    }

    public function horarios() {
        return $this->belongsTo(Horario::class, 'horarioId');
    }
}
