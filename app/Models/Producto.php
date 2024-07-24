<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['nombre', 'precio', 'cantidadEnStock','imagen','inventarioId','descuentoId'];

    public function inventario(){
        return $this->belongsTo(Inventario::class,'inventarioId');
    }

    function productoHasTecnica()
    {
        return $this-> hasMany( ProductoHasTecnica::class, 'productoId');
    }

    function productoHasInscripcion()
    {
        return $this-> hasMany( ProductoHasInscripcion::class, 'productoId');
    }


    public function detalleProductoHasProducto(){
        return $this->hasMany(DetalleProductoHasProducto::class, 'productoId');
    }

    public function descuento(){
        return $this->belongsTo(Descuento::class,'descuentoId');
    }

    public function carritoHasProducto(){
        return $this->hasMany(CarritoHasProducto::class, 'productoId');
    }

}
