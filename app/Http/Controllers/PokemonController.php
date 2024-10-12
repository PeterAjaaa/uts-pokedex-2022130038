<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemon.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'primary_type' => 'required|string|max:50',
            'weight' => 'numeric|digits_between:0,8',
            'height' => 'numeric|digits_between:0,8',
            'hp' => 'integer|digits_between:0,4',
            'attack' => 'integer|digits_between:0,4|',
            'defense' => 'integer|digits_between:0,4',
            'is_legendary' => 'required|boolean',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pokemon = Pokemon::create($request->all());

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->hashName();
            $filePath = $file->storeAs($fileName);
            $pokemon->update([
                'photo' => $filePath
            ]);
        }

        return redirect()->route('pokemon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
