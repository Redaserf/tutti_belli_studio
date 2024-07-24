<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTecnica extends Model
{
    use HasFactory;

    protected $table = 'detalle_tecnicas';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['precioTecnica', 'precioTotal', 'ventaId'];


//    public function descuento(){
//        return $this->belongsTo(Descuento::class, 'descuentoId');
//    }

    public function venta(){
        return $this->belongsTo(Venta::class, 'ventaId');
    }

    public function detalleTecnicaHasTecnica(){
        return $this->hasMany(DetalleTecnicaHasTecnica::class, 'detalleTecnicaId');
    }

}
