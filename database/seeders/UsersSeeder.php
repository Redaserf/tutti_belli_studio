<?php

namespace Database\Seeders;

use App\Models\Horario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = new User();

        $admin->name = "Admin";
        $admin->apellido = "AdminApellido";
        $admin->fechaNacimiento = "2000-01-01";
        $admin->gender = "M";
        $admin->email = "admin@gmail.com";
        $admin->email_verified_at = now();
        $admin->password = Hash::make("password");
        $admin->fotoPerfil = null;
        $admin->numeroTelefono = "1234567890";
        $admin->rolId = 4; // ID del rol de administrador

        $admin->save();

        

        DB::table('users')->insert([
            [
                "name" => "Usuario",
                "apellido" => "UsuarioApellido",
                "fechaNacimiento" => "2000-01-01",
                "gender" => "M",
                "email" => "usuario@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("password"),
                "fotoPerfil" => null,
                "numeroTelefono" => "1234567890",
                "rolId" => 2,
            ],
            [
                "name" => "guest",
                "apellido" => "GuestApellido",
                "fechaNacimiento" => "2000-01-01",
                "gender" => "M",
                "email" => "guest@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("password"),
                "fotoPerfil" => null,
                "numeroTelefono" => "1234567890",
                "rolId" => 1,
            ],
        ]);


        $horarios = [
            ['diaSemana' => '0', 'horaInicio' => '10:00:00', 'horaFin' => '15:00:00'],
            ['diaSemana' => '1', 'horaInicio' => '09:00:00', 'horaFin' => '20:00:00'],
            ['diaSemana' => '2', 'horaInicio' => '09:00:00', 'horaFin' => '20:00:00'],
            ['diaSemana' => '3', 'horaInicio' => '09:00:00', 'horaFin' => '20:00:00'],
            ['diaSemana' => '4', 'horaInicio' => '09:00:00', 'horaFin' => '20:00:00'],
            ['diaSemana' => '5', 'horaInicio' => '09:00:00', 'horaFin' => '20:00:00'],
            ['diaSemana' => '6', 'horaInicio' => '10:00:00', 'horaFin' => '15:00:00'],
        ];

        foreach ($horarios as $horario) {
            Horario::create($horario);
        }


        DB::table('empleados_has_horarios')->insert([
            [
                'empleadoId' => $admin->id,
                'horarioId' => 1,
            ],
            [
                'empleadoId' => $admin->id,
                'horarioId' => 2,
            ],
            [
                'empleadoId' => $admin->id,
                'horarioId' => 3,
            ],
            [
                'empleadoId' => $admin->id,
                'horarioId' => 4,
            ],
            [
                'empleadoId' => $admin->id,
                'horarioId' => 5,
            ],
            [
                'empleadoId' => $admin->id,
                'horarioId' => 6,
            ],
            [
                'empleadoId' => $admin->id,
                'horarioId' => 7,
            ]
        ]);

    }
}
