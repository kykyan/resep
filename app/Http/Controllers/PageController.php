<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class PageController extends Controller
{
    public function home()
    {
        $recipes = Recipe::all();
        return view('index', compact('recipes'));
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }
}
