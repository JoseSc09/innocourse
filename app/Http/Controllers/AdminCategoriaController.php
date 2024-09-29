<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy("created_at", "asc")->paginate(10);
        $categoriesRows = $categories->map(function ($category) {
            return [
                ['value' => $category->category_name],
                [
                    'edit_link' => route('admin.categorias.edit', $category),
                    'delete_link' => route('admin.categorias.destroy', $category)
                ]
            ];
        });
        return view("dashboard.pages.categorias.index", compact("categories", "categoriesRows"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.pages.categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|string|min:5|max:255',
        ]);
        Category::create($validatedData);
        return redirect()->route('admin.categorias.index')->with('success', 'Categoría creada con éxito');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
