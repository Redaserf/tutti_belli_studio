<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacaciones extends Model
{
    protected $table = 'vacaciones';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'fechaInicio',
        'fechaFin',
        'usuarioId'
    ];
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }
}
