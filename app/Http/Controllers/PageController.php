<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Recipe;
use Auth;

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

    public function dashboard()
    {
        $id = Auth::id();

        $recipes = DB::table('recipes')
            ->where('user_id', $id)
            ->get();
        
        return view('dashboard',['recipes' => $recipes]);
    }
}
