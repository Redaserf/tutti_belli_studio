<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoHasInscripcion extends Model
{
    use HasFactory;

    protected $table = 'productos_has_inscripciones';
    protected $primaryKey= 'id';

    protected $fillable = ['productoId', 'inscripcionId'];

    public function productos(){
        return $this->belongsTo(Producto::class, 'productoId');
    }

    public function inscripciones(){
        return $this->belongsTo(Inscripcion::class, 'inscripcionId');
    }
}
