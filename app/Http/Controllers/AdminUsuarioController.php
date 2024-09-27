<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUsuarioController extends Controller
{

    public function index() {}


    public function create()
    {
        $rol_id = session('rol_id');
        return view('dashboard.pages.usuarios.create', compact('rol_id'));
    }

    public function store(Request $request)
    {
        // Validaciones
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rol_id' => 'required|exists:rols,id',
        ]);

        // Manejo de la imagen
        if ($request->hasFile('image')) {
            // Guardar la imagen en el directorio 'images/users' con un nombre único
            $imagePath = $request->file('image')->storeAs(
                'images/users',
                time() . '_' . $validatedData['username'] . '.' . $request->file('image')->getClientOriginalExtension(),
                'public'
            );
            $validatedData['image'] = 'storage/' . $imagePath;
        } else {
            // Usar imagen por defecto
            $validatedData['image'] = 'storage/images/users/user_default.png';
        }

        // Encriptar la contraseña
        $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['rol_id'] = session('rol_id');

        // Crear el usuario
        $user = User::create($validatedData);
        

        // Redirigir con un mensaje de éxito
        return redirect("/dashboard/usuarios/{$user->rol->rol_name}");
    }

    /**
     * Display the specified resource.
     */
    public function show(String $rol_name)
    {
        $rol = Rol::where("rol_name", $rol_name)->firstOrFail();
        session(['rol_id' => $rol->id]);
        $users = User::where("rol_id", $rol->id)->paginate(5);
        return view("dashboard.pages.usuarios.show", compact('users','rol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('dashboard.pages.usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        // Validar los datos
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Manejo de la nueva imagen
        if ($request->hasFile('image')) {
            if ($user->image !== 'storage/images/users/user_default.png') {
                // Eliminar la imagen anterior si no es la por defecto
                Storage::disk('public')->delete(str_replace('storage/', '', $user->image));
            }

            // Guardar la nueva imagen
            $imagePath = $request->file('image')->storeAs(
                'images/users',
                time() . '_' . $user->username . '.' . $request->file('image')->getClientOriginalExtension(),
                'public'
            );
            $validatedData['image'] = 'storage/' . $imagePath;
        }

        // Actualizar los datos del usuario
        $user->update($validatedData);

        return redirect("/dashboard/usuarios/{$user->rol->rol_name}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
