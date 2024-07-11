<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHasInventario extends Model
{


    protected $fillable = [
        'inventarioId',
        'productoId'
    ];

    use HasFactory;

    //relaciones
    function inventario(){
        return $this->belongsTo(Inventario::class,'inventarioId');
    }

    function producto(){
        return $this->belongsTo(Producto::class,'productoId');
    }
}
