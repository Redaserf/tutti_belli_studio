<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    use HasFactory;

    protected $table = 'tecnicas';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['nombre', 'precio', 'descripcion','servicioId','descuentoId'];


    // public function cuidados(){
      //  return $this->hasOne(Cuidado::class);
    //}


//    public function InventarioHasTecnica(){
//        return $this->hasMany(InventarioHasTecnica::class);
//    }

    public function servicios(){
        return $this->belongsTo(Servicio::class, 'servicioId');
    }

    public function cursos() {
        return $this->belongsToMany(Curso::class, 'tecnicas_has_cursos', 'tecnicaId', 'cursoId');
    }

    public function descuento(){
        return $this->belongsTo(Descuento::class,'descuentoId');
    }

    public function productosTecnica2()
    {
        return $this->belongsToMany(Producto::class, 'producto_has_tecnicas', 'tecnicaId', 'productoId')->withPivot('cantidadDeUso');
    }

      public function detalleTecnicas()
    {
        return $this->belongsToMany(DetalleTecnica::class, 'detalle_tecnica_has_tecnicas', 'tecnicas_tecnica_id', 'detalle_tecnica_id');
    }

    public function citasHasServicios()
    {
        return $this->hasMany(CitaHasServicio::class, 'tecnicaId');
    }

    // public function citas()
    // {
    //     return $this->hasManyThrough(
    //         Cita::class,              // El modelo final al que queremos acceder
    //         CitaHasServicio::class,   // El modelo intermedio
    //         'tecnicaId',              // Foreign key en el modelo intermedio (CitaHasServicio) que se refiere a Tecnica(modelo)
    //         'id',                     // Foreign key en el modelo final (Cita) que se refiere al modelo intermedio
    //         'id',                     // Local key en el modelo Tecnica
    //         'citaId'                  // Local key de citas en el modelo intermedio (CitaHasServicio)
    //     );
    // }

    public function productosHasTecnica()
    {
        return $this->hasMany(ProductoHasTecnica::class, 'tecnicaId', 'id');
    }


    public function productos()
    {
        return $this->hasManyThrough(
            Producto::class,
            ProductoHasTecnica::class,
            'tecnicaId', // Foreign key on ProductoHasTecnica table
            'id', // Foreign key on Producto table
            'id', // Local key on Tecnica table
            'productoId' // Local key on ProductoHasTecnica table
        );
    }

    public function detalleTecnicaProducto() {
        return $this->hasMany(DetalleTecnicaProducto::class, 'tecnicaId');
    }

    // public function detalleTecnica() {
    //     return $this->hasMany(DetalleTecnica::class, 'tecnicaId');
    // }
}
