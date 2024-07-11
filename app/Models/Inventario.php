<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{

    protected $table = 'inventarios';
    protected $primaryKey= 'id';

    protected $fillable = [
        'nombre',
    ];

    use HasFactory;


    //relaciones
    function inventarioHasTecnicas()
    {
        return $this-> hasMany( InventarioHasTecnica::class, 'inventarioId');
    }

    function inventarioHasInscripcion(){
        return $this->hasMany(InvetarioHasInscripcion::class, 'inventarioId');
    }

    function productHasInventario(){
        return $this->hasMany(ProductHasInventario::class, 'inventarioId');
    }

    function DetalleProductoHasInventario(){
        return $this->hasMany(DetalleProductoHasInventario::class, 'inventarioId');
    }
}
