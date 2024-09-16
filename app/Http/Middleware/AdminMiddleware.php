<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Verifica si el usuario está autenticado y si el rol_id es 1
        if (Auth::check() && Auth::user()->rol_id == 1) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Acceso denegado.');
    }
}
