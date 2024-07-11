<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProductoHasInventario extends Model
{
    use HasFactory;

    //relaciones
    function inventario(){
        return $this->belongsTo(Inventario::class,'inventarioId');
    }

    function DetalleProducto(){
        return $this->belongsTo(Inventario::class,'detalleProductoId');
    }
}
