<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['nombre'];

    public function citas(){
        return $this->belongsToMany(Cita::class,'citas_has_servicios', 'citaId', 'servicioId')->withPivot('tecnicaId');
    }

    public function tecnicas(){
        return $this->hasMany(Tecnica::class, 'servicioId');
    }

    public function tecnica()
    {
        return $this->belongsToMany(Tecnica::class, 'citas_has_servicios', 'servicioId', 'tecnicaId')
                    ->withPivot('citaId');
    }
}
