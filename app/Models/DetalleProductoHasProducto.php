<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProductoHasProducto extends Model
{
    use HasFactory;

    protected $table = 'detalle_productos_has_productos';
    protected $primaryKey= 'id';

    protected $fillable = ['detalleProductosId', 'productoID'];
}
