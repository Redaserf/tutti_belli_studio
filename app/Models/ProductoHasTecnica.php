<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoHasTecnica extends Model
{

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    protected $table = 'producto_has_tecnicas';

    public $timestamps = false;

    protected $fillable = [
        'productoId',
        'tecnicaId',
        'cantidadDeUso'
    ];

    use HasFactory;

    function producto(){
        return $this->belongsTo(Producto::class,'productoId');
    }

    function tecnica(){
        return $this->belongsTo(Tecnica::class,'tecnicaId');
    }

//    use HasFactory;
}
