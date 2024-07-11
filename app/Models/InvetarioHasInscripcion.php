<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvetarioHasInscripcion extends Model
{
    use HasFactory;

    //relaciones
    function inventario(){
        return $this->belongsTo(Inventario::class,'inventarioId');
    }

    function inscripcion(){
        return $this->belongsTo(Inscripcion::class,'inscripcionId');
    }

}
