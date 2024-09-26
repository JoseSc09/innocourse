<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //Asignar imagen por defecto
        $validatedData['image'] = $request->input('image','storage/images/users/user_default.png');

        // Asignar el rol de estudiante por defecto
        $validatedData['rol_id'] = $request->input('rol_id', 3);

        // Crear el usuario
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect()->route('register.index')->with('success', 'Usuario registrado exitosamente');
    }
}
