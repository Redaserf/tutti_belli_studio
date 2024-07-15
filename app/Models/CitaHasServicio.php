<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaHasServicio extends Model
{
    use HasFactory;

    protected $table = 'citas_has_servicios';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['citaId', 'servicioId'];


    public function cita(){
        return $this->belongsTo(Cita::class, 'citaId');
    }

    public function servicio(){
        return $this->belongsTo(Servicio::class, 'servicioId');
    }
}
