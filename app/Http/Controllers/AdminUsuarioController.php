<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUsuarioController extends Controller
{

    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rol_id = intval($request->query('rol'));
        return view('dashboard.pages.usuarios.create', compact('rol_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validaciones
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rol_id' => 'required|exists:roles,rol_id',
        ]);

        // Manejo de la imagen
        if ($request->hasFile('imagen')) {
            // Obtener la extensión de la imagen
            $extension = $request->file('imagen')->getClientOriginalExtension();

            // Crear el nombre del archivo usando un timestamp, el nombre de usuario y la extensión
            $imageName = time() . '_' . $validatedData['username'] . '.' . $extension;

            // Guardar la imagen en el directorio 'images/usuarios' y usar el nombre personalizado
            $imagePath = $request->file('imagen')->storeAs('images/usuarios', $imageName, 'public');

            // Guardar la ruta de la imagen en la base de datos
            $validatedData['imagen'] = 'storage/' . $imagePath;
        } else {
            // Si no se sube ninguna imagen, usar la imagen por defecto
            $validatedData['imagen'] = 'storage/images/usuarios/user_default.png';
        }

        // Encriptar la contraseña
        $validatedData['password'] = bcrypt($request->password);
        $validatedData['rol_id'] = intval($request->query('rol_id'));
        // Crear el usuario
        User::create($validatedData);
        // Obtener el rol correspondiente
        $rol = Rol::where('rol_id', intval($request->query('rol_id')))->firstOrFail(); // Usar firstOrFail para obtener un solo rol

        // Redirigir con un mensaje de éxito
        return redirect("/dashboard/usuarios/{$rol->nombre_rol}");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $rol_id)
    {
        $id = null;
        switch ($rol_id) {
            case "administrador":
                $id = 1;
                break;
            case "instructor":
                $id = 2;
                break;
            case "estudiante":
                $id = 3;
                break;
        }
        $users = User::where("rol_id", $id)->paginate(3);
        return view("dashboard.pages.usuarios.show", compact("users", 'rol_id', 'id'));
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
        // Buscar Usuario
        $user = User::find($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'imagen' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Manejar la subida de una nueva imagen si está presente
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe y no es la imagen por defecto
            if ($user->imagen && $user->imagen !== 'storage/images/usuarios/user_default.png') {
                // Obtener la ruta absoluta de la imagen anterior
                $oldImagePath = public_path($user->imagen);

                // Comprobar si el archivo existe y eliminarlo
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Obtener el archivo de la imagen
            $image = $request->file('imagen');

            // Definir el nombre del archivo
            $imageName = time() . '_' . $user->username . '.' . $image->getClientOriginalExtension();

            // Guardar la imagen en la carpeta 'storage/images/usuarios/'
            $imagePath = $image->storeAs('images/usuarios', $imageName, 'public');

            // Actualizar la ruta de la imagen en la base de datos
            $user->imagen = 'storage/' . $imagePath;
        }

        // Actualizar los otros campos
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        //Guardar usuario
        $user->save();

        $rol = Rol::where('rol_id', $user->rol_id)->firstOrFail();

        return redirect("/dashboard/usuarios/{$rol->nombre_rol}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
