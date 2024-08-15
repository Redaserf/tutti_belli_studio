<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencias';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'dia',
        'hora',
        'usuarioId'
    ];
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }
}
