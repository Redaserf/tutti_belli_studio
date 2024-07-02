<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidado extends Model
{
    use HasFactory;

    protected $table = 'cuidados';
    protected $primaryKey= 'id';

    protected $fillable = ['descripcion', 'confirmacionEnvio', 'fechaConfirmacion', 'fechaUltimaVisualizacion', 'tecnicaId'];

    public function tecnicas(){
        return $this->belongsTo(Tecnica::class, 'tecnicaId');
    }
}
