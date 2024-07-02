<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    use HasFactory;

    protected $table = 'tecnicas';
    protected $primaryKey= 'id';

    protected $fillable = ['nombre', 'precio', 'descripcion', 'servicioId'];
    

    public function cuidados(){
        return $this->hasOne(Cuidado::class);
    }

    public function tecnicasHasCursos(){
        return $this->hasMany(TecnicaHasCurso::class);
    }

    public function materialesUsados(){
        return $this->hasMany(MaterialUsado::class);
    }
}
