<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{

    protected $table = 'inventarios';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];

    use HasFactory;


    //relaciones CORREGIR

    function producto(){
        return $this->hasMany(Producto::class, 'inventarioId');
    }

}
