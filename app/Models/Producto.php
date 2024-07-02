<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey= 'id';

    protected $fillable = ['nombre', 'precio', 'cantidadEnStock'];

    public function productosHasManyInscriptiones(){
        return $this->hasMany(ProductoHasInscripcion::class);
    }

    public function materialesUsados(){
        return $this->hasMany(MaterialUsado::class);
    }
}
