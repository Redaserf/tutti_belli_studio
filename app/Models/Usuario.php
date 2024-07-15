<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey= 'id';

    //Para que no de problemas a la hora de hacer pruebas y llenar, Ponerlas true si es necesario saber las fechas
    public $timestamps = false;

    protected $fillable = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'contrasenia', 'fotoPerfil', 'correo', 'numeroTelefono', 'rolId'];

    public function roles(){
        return $this->belongsTo(Rol::class, 'rolId');
    }

    public function citasUsuarios(){
        return $this->hasOne(Cita::class);
    }

    public function citasEmpleados(){
        return $this->hasOne(Cita::class);
    }

    public function ventas(){
        return $this->hasMany(Venta::class);
    }


    public function ususariosEmpleadoCursos(){
        return $this->hasMany(Curso::class);
    }


    public function inscripciones(){
        return $this->hasOne(Inscripcion::class);
    }
}
