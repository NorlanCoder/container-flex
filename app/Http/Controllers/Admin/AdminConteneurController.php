<?php

namespace App\Http\Controllers\Admin;

use App\Models\Conteneur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SousCategory;
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
        $sous_categories = SousCategory::select('id', 'label')->get();
        return view('admin.conteneur.create', ['souscategories' => $sous_categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'label' => ['nullable', 'string', 'max:255'],
            'conteneur_sous_category_id' => ['required', 'integer'],
            'etat' => ['nullable', 'string', 'in:neuf,occasion'],
            'prix' => ['nullable', 'numeric'],
            'quick_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'surface' => ['nullable', 'numeric'],
            'capacity' => ['nullable', 'numeric'],
            'nbr_palette' => ['nullable', 'integer'],
            'longueur_exterieur' => ['nullable', 'numeric'],
            'largeur_exterieur' => ['nullable', 'numeric'],
            'hauteur_exterieur' => ['nullable', 'numeric'],
            'largeur_interieur' => ['nullable', 'numeric'],
            'hauteur_interieur' => ['nullable', 'numeric'],
            'largeur_porte' => ['nullable', 'numeric'],
            'hauteur_porte' => ['nullable', 'numeric'],
            'structure' => ['nullable', 'string', 'max:255'],
            'plancher' => ['nullable', 'string', 'max:255'],
            'passage_de_fourche' => ['nullable', 'integer']
        ]);

        Conteneur::create($validate);
        return Redirect::route('admin.conteneur.index')->with('status', 'conteneur created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conteneur = Conteneur::where('id', $id)->first();
        return view('admin.conteneur.show', ['conteneur' => $conteneur]);
    }

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
        $validate = $request->validate([
            'label' => ['nullable', 'string', 'max:255'],
            'etat' => ['nullable', 'string', 'in:neuf,occasion'],
            'prix' => ['nullable', 'decimal'],
            'quick_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'surface' => ['nullable', 'decimal'],
            'capacity' => ['nullable', 'decimal'],
            'nbr_palette' => ['nullable', 'integer'],
            'longueur_exterieur' => ['nullable', 'decimal'],
            'largeur_exterieur' => ['nullable', 'decimal'],
            'hauteur_exterieur' => ['nullable', 'decimal'],
            'largeur_interieur' => ['nullable', 'decimal'],
            'hauteur_interieur' => ['nullable', 'decimal'],
            'largeur_porte' => ['nullable', 'decimal'],
            'hauteur_porte' => ['nullable', 'decimal'],
            'structure' => ['nullable', 'string', 'max:255'],
            'plancher' => ['nullable', 'string', 'max:255'],
            'passage_de_fourche' => ['nullable', 'integer']
        ]);

        $conteneur = Conteneur::where('id', $id)->first();

        $conteneur->update($validate);

        return Redirect::route('admin.conteneur.index')->with('status', 'Conteneur mis a jour avec succes');
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
