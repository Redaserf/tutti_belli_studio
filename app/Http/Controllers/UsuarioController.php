<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            }  elseif ($user->rolId == 4) {
                return redirect('/Home-administrador');
            }
        }

        // Poner un mensaje de que hubo un error al loguearse
        return response()->json([
            'error' => 'Correo o contraseña incorrectas. Por favor, intente de nuevo.'
        ], 401);
    }


    public function Registro(Request $request){
        $user = User::create([
            'name' => $request->nombre,
            'apellido' => $request->apellidos,
            'fechaNacimiento' => $request->fechaNacimiento,
            'numeroTelefono' => $request->telefono,
            'email' => $request->email,
            'gender' => $request->genero,
            'password' => Hash::make($request->password),
            'rolId' => 2,
        ]);
        Auth::login($user);
        return redirect('/Home-usuario');
    }

    public function actualizarPerfil(Request $request) {
        $user = Auth::user();

        if ($user) {
            $user->name = $request->input('name');
            $user->apellido = $request->input('apellidos');
            $user->gender = $request->input('gender');
            $user->email = $request->input('email');
            $user->numeroTelefono = $request->input('phone');
    
            $user->save();
    
            return response()->json(['success' => 'Perfil actualizado exitosamente']);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }


    public function Logout(){
        Auth::logout();
        return redirect('/Home-guest');
    }


}
