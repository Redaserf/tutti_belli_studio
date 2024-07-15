<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProductoHasProducto extends Model
{
    protected $table = 'detalle_producto_has_productos';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['productoId', 'detalleProductoId'];

    public function producto(){
        return $this->belongsTo(Producto::class, 'productoId');
    }

    public function detalleProducto(){
        return $this->belongsTo(DetalleProducto::class, 'detalleProductoId');
    }

    use HasFactory;
}
