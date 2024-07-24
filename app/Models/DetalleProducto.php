<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    use HasFactory;

    protected $table = 'detalle_productos';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['precioUnitario', 'cantidadProductos', 'precioTotal','ventaId'];

    //Hay que llegar a un acuerdo con los detalles de las ventas

//    public function descuento(){
//        return $this->belongsTo(Descuento::class,'descuentoId');
//    }

    public function venta(){
        return $this->belongsTo(Venta::class,'ventaId');
    }

    function detalleProductoHasProducto(){
        return $this->hasMany(DetalleProductoHasProducto::class, 'detalleProductoId');
    }

}
