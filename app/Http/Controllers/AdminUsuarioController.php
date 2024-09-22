<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

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
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $rol_id)
    {
        switch ($rol_id) {
            case "administrador":
                $rol_id = 1;
                break;
            case "instructores":
                $rol_id = 2;
                break;
            case "estudiantes":
                $rol_id = 3;
                break;
        }
        $users = User::where("rol_id", $rol_id)->paginate(3);
        return view("dashboard.pages.usuarios.index", compact("users",'rol_id'));
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
