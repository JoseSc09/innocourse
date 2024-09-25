<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;

class AdminMembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suscripciones = Suscripcion::orderBy("created_at", "asc")->paginate(10);
        return view("dashboard.pages.membresias.index", compact("suscripciones"));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suscripcion = Suscripcion::find($id);
        return view("dashboard.pages.membresias.edit", compact("suscripcion"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encuentra la suscripción actual
        $suscripcion = Suscripcion::findOrFail($id);

        // Validar los datos del formulario
        $request->validate([
            'num_cursos' => 'required|integer|min:1', // Número entero mínimo 1
            'nombre_suscripcion' => 'required|string|max:255|unique:suscripciones,nombre_suscripcion,' . $suscripcion->id_suscripcion . ',id_suscripcion',
            // Unicidad en 'nombre_suscripcion' excepto la suscripción actual
            'precio' => 'required|numeric|min:0.01', // Precio mínimo 0.01
            'duracion_meses' => 'required|integer|min:1|max:36', // Duración entre 1 y 36 meses
            'descripcion' => 'nullable|string|max:2000', // Descripción opcional con máximo 2000 caracteres
        ]);

        // Actualizar la suscripción
        $suscripcion->update([
            'num_cursos' => $request->num_cursos,
            'nombre_suscripcion' => $request->nombre_suscripcion,
            'precio' => $request->precio,
            'duracion_meses' => $request->duracion_meses,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('admin.membresias.index')->with('success', 'Suscripción actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
