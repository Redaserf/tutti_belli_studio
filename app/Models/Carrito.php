<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carritos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'costoTotal',
        'usuarioId'
    ];

    use HasFactory;

    function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }

    public function carritoHasProducto(){
        return $this->hasMany(CarritoHasProducto::class, 'carritoId');
    }

}
