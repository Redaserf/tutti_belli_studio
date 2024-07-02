<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $primaryKey= 'id';

    protected $fillable = ['nombre'];

    public function citaHasServicio(){
        return $this->hasMany(CitaHasServicio::class);
    }
}
