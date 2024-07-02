<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';
    protected $primaryKey= 'id';

    protected $fillable = ['fechaInscripcion', 'precio', 'estado', 'usuarioId', 'cursoId']; //el precio igual lo podemos sacar del curso (duplicidad de datos)
 
    
    public function usuarios(){
        return $this->belongsTo(Usuario::class, 'usuarioId');
    }

    public function cursos(){
        return $this->belongsTo(Curso::class, 'cursoId');
    }

    public function productosHasInscripciones(){
        return $this->hasMany(ProductoHasInscripcion::class);
    }
}
