<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las FAQs de la base de datos
        $faqs = Faq::paginate(10); // Usa paginate para paginación, o all() si no la necesitas

        // Preparar las filas para la tabla
        $rows = $faqs->map(function ($faq) {
            return [
                ['value' => $faq->question],
                ['value' => $faq->answer],
                [
                    'edit_link' => route('admin.faqs.edit', $faq->id),
                    'delete_link' => route('admin.faqs.destroy', $faq->id),
                    'routeDelete' => '/dashboard/faqs/' . $faq->id
                ]
            ];
        });

        // Pasar FAQs y filas a la vista
        return view('dashboard.pages.faqs.index', compact('faqs', 'rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ creada con éxito.');
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
        $faq = Faq::findOrFail($id);
        return view('dashboard.pages.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ eliminada con éxito.');
    }
}
