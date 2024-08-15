<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleInscripcion extends Model
{
    protected $table = 'detalle_inscripciones';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'ventaId',
      'inscripcionId'
    ];

    use HasFactory;

    public function venta(){
        return $this->belongsTo(Venta::class, 'ventaId');
    }

    public function inscripcion(){
        return $this->belongsTo(Inscripcion::class, 'inscripcionId');
    }
}
