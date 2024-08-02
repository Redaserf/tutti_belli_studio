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

    protected $fillable = ['citaId','tecnicaId', 'productoId', 'cantidadProducto'];


//    public function descuento(){
//        return $this->belongsTo(Descuento::class, 'descuentoId');
//    }

    // public function venta(){
    //     return $this->belongsTo(Venta::class, 'ventaId');
    // }

    // public function detalleTecnicaHasTecnica(){
    //     return $this->hasMany(DetalleTecnicaHasTecnica::class, 'detalleTecnicaId');
    // }

    // public function tecnicas()
    // {
    //     return $this->belongsToMany(Tecnica::class, 'detalle_tecnicas_has_tecnicas', 'detalleTecnicaId', 'tecnicaId');
    // }

    public function cita(){
        return $this->belongsTo(Cita::class, 'citaId');
    }
    
    public function tecnica() {
        return $this->belongsTo(Tecnica::class, 'tecnicaId');
    }

    public function producto() {
        return $this->belongsTo(Producto::class, 'productoId');
    }

}
