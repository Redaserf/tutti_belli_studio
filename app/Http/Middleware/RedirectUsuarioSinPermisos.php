<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectUsuarioSinPermisos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if(!Auth::check()){
            $redirect = '/Home-guest';
        }
        $user = Auth::user();

        if($user){

            if($user->rolId == 2){
                $redirect = '/Home-usuario';
            }elseif($user->rolId == 4){
                $redirect = '/Ver-Citas';
            }
            
        }

        if($redirect){
            return redirect($redirect);
        }

        return $next($request);
    }
}
