<?php

namespace App\Http\Controllers\Admin;

use App\Models\SousCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class SousCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sous_categories = SousCategory::with('category')->get();
        // dd($sous_categories);
        return view('admin.sous-categories.index', ['souscategories' => $sous_categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'label')->get();
        // dd($categories);
        return view('admin.sous-categories.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'label' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255']
        ]);

        SousCategory::create($validate);

        return redirect()->route('souscategories.index')->with('success', 'Sous Categorie crée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sous_category = SousCategory::find($id);
        return view('admin.sous-categories.show', ['sous-category' => $sous_category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::select('id', 'label')->get();
        $sous_category = SousCategory::find($id);
        return view('admin.sous-categories.edit', ['souscategory' => $sous_category, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'label' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255']
        ]);

        SousCategory::where('id', $id)->update($validate);

        return redirect()->route('souscategories.index')->with('success', 'Sous Categorie modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sous_category = SousCategory::find($id);
        $sous_category->delete();

        return Redirect::route('souscategories.index')->with('status', 'category deleted');
    }
}
