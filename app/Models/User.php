<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey= 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellido',
        'fechaNacimiento',
        'gender',
        'email',
        'password',
        'fotoPerfil',
        'numeroTelefono',
        'rolId'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function roles(){
        return $this->belongsTo(Rol::class, 'rolId');
    }

    public function citasUsuarios(){
        return $this->hasMany(Cita::class,'usuarioId');
    }

    public function citasEmpleados(){
        return $this->hasMany(Cita::class,'empleadoId');
    }

     public function ventas(){
         return $this->hasMany(Venta::class,'usuarioId');
     }


    public function ususariosEmpleadoCursos(){
        return $this->hasMany(Curso::class,'empleadoId');
    }


    public function inscripciones(){
        return $this->hasOne(Inscripcion::class,'usuarioId');
    }

    public function carrito()
    {
        return $this->hasOne(Carrito::class,'usuarioId');
    }


}
