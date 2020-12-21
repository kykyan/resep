<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Recipe;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function activeRecipe()
    {
        $data['recipe'] = Recipe::where('is_publish', 1)
            ->get();
        return view('admin.activerecipe', $data);
    }

    public function delete($id)
    {
        $recipe = Recipe::find($id);

        Recipe::where('id', $id)
            ->update([
                'is_publish' => 0,
            ]);
        
        return redirect('/activerecipe');
    }
    
    public function deletedRecipe()
    {
        $data['recipe'] = Recipe::where('is_publish', 0)
        ->get();
        return view('admin.deletedrecipe', $data);
    }

    public function restore($id)
    {
        $recipe = Recipe::find($id);

        Recipe::where('id', $id)
            ->update([
                'is_publish' => 1,
            ]);
        
        return redirect('/deletedrecipe');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
