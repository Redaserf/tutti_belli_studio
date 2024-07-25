<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoHasProducto extends Model
{
    protected $table = 'carrito_has_productos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'carritoId',
        'productoId'
    ];

    use HasFactory;

    public function producto(){
        return $this->belongsTo(Producto::class, 'productoId');
    }

    public function carrito(){
        return $this->belongsTo(Carrito::class, 'carritoId');
    }
}
