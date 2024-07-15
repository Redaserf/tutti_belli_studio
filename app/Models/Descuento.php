<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    protected $table = 'descuentos';
    protected $primaryKey = 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['cantidadDescuento'];

    function detalleProducto(){
        return $this->hasMany(DetalleProducto::class, 'descuentoId');
    }

    function detalleTecnica(){
        return $this->hasMany(DetalleTecnica::class, 'descuentoId');
    }

    function curso(){
        return $this->hasMany(Curso::class, 'descuentoId');
    }




}
