<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialUsado extends Model
{
    use HasFactory;

    protected $table = 'materiales_usados';
    protected $primaryKey= 'id';

    protected $fillable = ['productoId', 'tecnicaId'];

    public function tecnicas(){
        return $this->belongsTo(Tecnica::class, 'tecnicaId');
    }

    public function productos(){
        return $this->belongsTo(Producto::class, 'productoId');
    }
}
