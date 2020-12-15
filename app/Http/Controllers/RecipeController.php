<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createResep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'recipe_name' => 'required|string',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'tools' => 'required|string',
            'how_to_make' => 'required|string'
        ]);

        $recipe = Recipe::create([
            'recipe_name' => ucwords($request->recipe_name),
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'tools' => $request->tools,
            'how_to_make' => $request->how_to_make,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('home'))->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        return view('detail', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
