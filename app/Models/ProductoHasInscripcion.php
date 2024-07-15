<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoHasInscripcion extends Model
{
    protected $table = 'producto_has_inscripciones';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['productoId', 'inscripcionId'];

    public function producto(){
        return $this->belongsTo(Producto::class, 'productoId');
    }

    public function inscripciones(){
        return $this->belongsTo(Inscripcion::class, 'inscripcionId');
    }

    use HasFactory;
}
