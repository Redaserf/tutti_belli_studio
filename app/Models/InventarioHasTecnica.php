<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioHasTecnica extends Model
{

    protected $fillable = [
        'inventarioId',
        'tecnicaId'
    ];

    use HasFactory;

    function inventario(){
        return $this->belongsTo(Inventario::class,'inventarioId');
    }

    function tecnica(){
        return $this->belongsTo(Tecnica::class,'tecnicaId');
    }
}
