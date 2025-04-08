<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Conteneur;
use App\Models\SousCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function homepage(Request $request)
    {
        return view('home');
    }

    public function productlist(Request $request, string $sous_category_name)
    {
        $sous_category = SousCategory::where('label', $sous_category_name)->first();
        $conteneurs = Conteneur::where('sous_category_id', $sous_category->id)->get();
        return view('shop', ['conteneurs' => $conteneurs]);
    }

    public function productdetails(Request $request)
    {
        return view('details');
    }
}
