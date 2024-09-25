<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminSobreNosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::orderBy("id_about", "asc")->paginate(10);
        return view("dashboard.pages.sobre-nosotros.index", compact("about"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = About::where("id_about", $id)->first();
        return view("dashboard.pages.sobre-nosotros.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = About::where("id_about", $id)->firstOrFail();
        $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string|max:5255',
            'imagen' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Manejar la subida de una nueva imagen si está presente
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if ($data->imagen) {
                // Obtener la ruta absoluta de la imagen anterior
                $oldImagePath = public_path($data->imagen);

                // Comprobar si el archivo existe y eliminarlo
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Obtener el archivo de la imagen
            $image = $request->file('imagen');

            // Definir el nombre del archivo
            $imageName = time() . '_' . $data->titulo . '.' . $image->getClientOriginalExtension();

            // Guardar la imagen en la carpeta 'storage/images/usuarios/'
            $imagePath = $image->storeAs('images/usuarios', $imageName, 'public');

            // Actualizar la ruta de la imagen en la base de datos
            $data->imagen = 'storage/' . $imagePath;
        }
        // Actualizar los otros campos
        $data->titulo = $request->input('titulo');
        $data->texto = $request->input('texto');

        //Guardar usuario
        $data->save();

        return redirect()->route('admin.sobre-nosotros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
