<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    use HasFactory;

    protected $table = 'tecnicas';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['nombre', 'precio', 'descripcion', 'servicioId'];


    // public function cuidados(){
      //  return $this->hasOne(Cuidado::class);
    //}

    public function tecnicasHasCursos(){
        return $this->hasMany(TecnicaHasCurso::class);
    }

    public function InventarioHasTecnica(){
        return $this->hasMany(InventarioHasTecnica::class);
    }

    public function servicios(){
        return $this->belongsTo(Servicio::class);
    }

}
