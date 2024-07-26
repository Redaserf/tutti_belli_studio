<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carritos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'costoTotal',
        'usuarioId'
    ];

    function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'carrito_has_productos', 'carritoId', 'productoId')
                    ->withTimestamps();
    }

}
