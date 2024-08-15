<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = true;

    protected $fillable = ['total', 'fechaVenta', 'estadoVenta','usuarioId']; //total lo podemos sacar de los detalles(por discutir)

     public function usuarios(){
         return $this->belongsTo(User::class, 'usuarioId');
     }

     public function detalleProductos(){
         return $this->hasMany(DetalleProducto::class,'ventaId');

     }

     public function citaHasServicio() {
        return $this->hasMany(CitaHasServicio::class, 'ventaId');
    }

    public function detalleInscripciones(){
        return $this->hasMany(DetalleInscripcion::class,'ventaId');
    }
}
