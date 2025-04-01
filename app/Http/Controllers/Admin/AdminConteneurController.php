<?php

namespace App\Http\Controllers\Admin;

use App\Models\Conteneur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminConteneurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conteneurs = Conteneur::all();
        return view('admin.conteneur.index', ['conteneurs' => $conteneurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.conteneur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'label' => ['nullable', 'string', 'max:255'],
            'etat' => ['nullable', 'string', 'in:neuf,occasion'],
            'prix' => ['nullable', 'decimal'],

        ]);
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
        $conteneur = Conteneur::where('id', $id)->first();
        return view('admin.conteneur.edit', ['conteneur' => $conteneur]);
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
        $conteneur = Conteneur::where('id', $id)->first();
        $conteneur->delete();

        return Redirect::route('admin.conteneur.index')->with('status', 'conteneur deleted');
    }
}
