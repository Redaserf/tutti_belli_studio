<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';
    protected $primaryKey = 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    // public $timestamps = false;

    protected $fillable = ['fechaCita', 'horaCita', 'estadoCita', 'notasCita', 'usuarioId', 'empleadoId', 'ventaId'];

    public function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }

    public function usuarioEmpleado(){
        return $this->belongsTo(User::class, 'empleadoId');
    }


    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'citas_has_servicios', 'citaId', 'servicioId')
                    ->withPivot('tecnicaId');
    }

    public function venta(){
        return $this->belongsTo(Venta::class, 'ventaId');
    }

    //public function resenias(){
      //  return $this->hasOne(Resenia::class);
    //}

    public function detalleTecnica() {
        return $this->hasMany(DetalleTecnica::class, 'citaId');
    }
}
