<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reportes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'usuarioId'
    ];
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(User::class, 'usuarioId');
    }
}
