<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    use HasFactory;

    protected $table = 'detalle_productos';
    protected $primaryKey= 'id';

    protected $fillable = ['precioUnitario', 'cantidadProductos', 'precioTotal', 'descuentoId', 'ventaId'];

    //Hay que llegar a un acuerdo con los detalles de las ventas

    function DetalleProductoHasInventario(){
        return $this->hasMany(DetalleProductoHasInventario::class, 'detalleProductoId');
    }

}
