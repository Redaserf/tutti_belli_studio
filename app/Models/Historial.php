<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    protected $table = 'historiales';
    protected $primaryKey = 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    // public $timestamps = false;

    protected $fillable = ['usuarioId'];

    function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }

}
