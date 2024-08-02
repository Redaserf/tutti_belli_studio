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

    protected $fillable = ['nombre', 'precio', 'cantidadEnStock','imagen','descripcion','inventarioId','descuentoId'];

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

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class, 'carrito_has_productos', 'productoId', 'carritoId')
                    ->withTimestamps();
    }

    public function productoHasCurso(){
        return $this->hasMany(ProductoHasCurso::class, 'productoId');
    }

    public function detalleProducto(){

    }

}
