<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTecnica extends Model
{
    use HasFactory;

    protected $table = 'detalle_tecnicas';
    protected $primaryKey= 'id';

    protected $fillable = ['precioTecnica', 'precioTotal', 'descuentoId', 'ventaId'];
    
}
