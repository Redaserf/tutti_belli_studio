<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTecnicaHasTecnica extends Model
{
    use HasFactory;

    protected $table = 'detalle_tecnicas_has_tecnicas';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['detalleTecnicaId', 'tecnicaId'];

    public function tecnica(){
        return $this->belongsTo(Tecnica::class, 'tecnicaId');
    }

    public function detalleTecnica(){
        return $this->belongsTo(DetalleTecnica::class, 'detalleTecnicaId');
    }

}
