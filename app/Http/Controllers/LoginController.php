<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function validate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Buscar el usuario por email
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Guardar la sesión del usuario
            Auth::login($user);
            
            // Redirigir al dashboard si es administrador
            if ($user->rol_id == 1) {
                return redirect('/dashboard');
            } else {
                return redirect('/')->with('error', 'No tienes acceso al dashboard.');
            }
        }

        // Si las credenciales son incorrectas
        return redirect()->back()->with('error', 'Credenciales incorrectas.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
