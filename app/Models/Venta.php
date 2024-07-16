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
    public $timestamps = false;

    protected $fillable = ['total', 'fechaVenta', 'usuarioId']; //total lo podemos sacar de los detalles(por discutir)

    public function usuarios(){
        return $this->belongsTo(User::class, 'usuarioId');
    }
}
