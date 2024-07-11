<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';
    protected $primaryKey = 'id';

    protected $fillable = ['fechaCita', 'horaCita', 'estadoCita', 'notasCita', 'usuarioId', 'empleadoId'];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'usuarioId');
    }

    public function usuarioEmpleado(){
        return $this->belongsTo(Usuario::class, 'empleadoId');
    }


    public function citaHasServicio(){
        return $this->hasMany(CitaHasServicio::class,'citaId');
    }


    public function resenias(){
        return $this->hasOne(Resenia::class);
    }
}
