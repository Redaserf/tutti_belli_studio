<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTecnicaHasTecnica extends Model
{
    use HasFactory;

    protected $table = 'detalle_tecnicas_has_tecnicas';
    protected $primaryKey= 'id';

    protected $fillable = ['detalleTecnicaId', 'tecnicaId'];
    
}
