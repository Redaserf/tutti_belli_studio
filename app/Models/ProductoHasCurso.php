<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoHasCurso extends Model
{
    protected $table = 'producto_has_cursos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cursoId',
        'productoId',
        'cantidadPorUsar'
    ];
    use HasFactory;

    public function curso(){
        return $this->belongsTo(Curso::class, 'cursoId');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'productoId');
    }
}
