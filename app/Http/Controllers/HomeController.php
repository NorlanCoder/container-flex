<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function homepage(Request $request) {
        return view('home');
    }

    public function productlist(Request $request) {
        return view('shop');
    }

    public function productdetails(Request $request) {
        return view('details');
    }
}
