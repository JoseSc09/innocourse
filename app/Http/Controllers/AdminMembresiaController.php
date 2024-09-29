<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class AdminMembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = Subscription::orderBy("created_at", "asc")->paginate(10);
        $subscriptionsRows = $subscriptions->map(function ($subscription) {
            return [
                ['value' => $subscription->subscription_name],
                ['value' => $subscription->course_count],
                ['value' => 'S/ ' . $subscription->price,],
                ['value' => $subscription->duration_months . ' meses'],
                ['value' => $subscription->description],
                ['edit_link' => route('admin.membresias.edit', $subscription)]
            ];
        });
        return view("dashboard.pages.membresias.index", compact('subscriptions', 'subscriptionsRows'));
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
        $subscription = Subscription::find($id);
        return view("dashboard.pages.membresias.edit", compact("subscription"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encuentra la suscripción actual o lanza un error 404 si no se encuentra
        $subscription = Subscription::findOrFail($id);

        // Validar los datos del formulario
        $validatedData = $request->validate([
            'course_count' => 'required|integer|min:1', // Número de cursos mínimo 1
            'subscription_name' => 'required|string|max:255|unique:subscriptions,subscription_name,' . $subscription->id, // Unicidad excluyendo el actual
            'price' => 'required|numeric|min:0.01', // Precio mínimo de 0.01
            'duration_months' => 'required|integer|min:1|max:36', // Duración entre 1 y 36 meses
            'description' => 'nullable|string|max:2000', // Descripción opcional con máximo 2000 caracteres
        ]);

        // Actualizar la suscripción con los datos validados
        $subscription->update($validatedData);

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
