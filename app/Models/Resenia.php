<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resenia extends Model
{
    use HasFactory;

    protected $table = 'resenias';
    protected $primaryKey= 'id';

    protected $fillable = ['cantidadEstrellas', 'comentario', 'fechaResenia', 'citaId'];

    
    public function citas(){
        return $this->belongsTo(Cita::class, 'citaId');
    }
}
