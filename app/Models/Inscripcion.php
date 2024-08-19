<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['fechaInscripcion', 'canceladoPorAdmin', 'estado', 'usuarioId', 'cursoId'];


    public function usuarios(){
        return $this->belongsTo(User::class, 'usuarioId');
    }

    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursoId');
    }

    public function productoHasInscripcion(){
        return $this->hasMany(ProductoHasInscripcion::class, 'inscripcionId');
    }

    public function detalleInscripciones(){
        return $this->hasMany(DetalleInscripcion::class,'inscripcionId');
    }
}
