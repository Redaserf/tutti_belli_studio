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

    function producto(){
        return $this->hasMany(Producto::class, 'descuentoId');
    }

    function tecnica(){
        return $this->hasMany(Tecnica::class, 'descuentoId');
    }

    function curso(){
        return $this->hasMany(Curso::class, 'descuentoId');
    }




}
