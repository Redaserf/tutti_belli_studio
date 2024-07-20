<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsuarioController extends Controller
{
    //

    


// ==========[ Login y registro de usuarios]==========


    public function Login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();

            $user = Auth::user();
            if ($user->rolId == 2) {
                return redirect('/Home-usuario');
            } elseif ($user->rolId == 3) {
                return redirect('/Home-empleado');
            }
        }

        // Poner un mensaje de que hubo un error al loguearse
        return response()->json([
            'email' => 'Cambiar esto a algo más bonito xd',
        ]);
    }

    
    public function Registro(Request $request){
        $user = User::create([
            'name' => $request->nombre,
            'apellido' => $request->apellidos,
            'fecha_nacimiento' => $request->fechaNacimiento,
            'numeroTelefono' => $request->telefono,
            'email' => $request->email,
            'gender' => $request->genero,
            'password' => Hash::make($request->password),
            'rolId' => 2,
        ]);
        Auth::login($user);
        return redirect('/Home-usuario');
    }


    public function Logout(){
        Auth::logout();
        return redirect('/Home-guest');
    }



// ==========[ Registro de empleados ]==========


    public function RegistroEmpleado(Request $request){
        $empleado = User::create([
            'name' => $request->employeeName,
            'apellido' => $request->employeeLastname,
            'fecha_nacimiento' => $request->employeeBirthDate,
            'numeroTelefono' => $request->employeePhone,
            'email' => $request->employeeEmail,
            'gender' => $request->employeeGender,
            'password' => Hash::make($request->employeePassword),
            'rolId' => 3,
        ]);

        return redirect('/Ver-Empleados');
    }

}
