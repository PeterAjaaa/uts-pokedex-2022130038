<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokedexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pokemons = Pokemon::paginate(9);
        return view('pokedex', compact('pokemons'));
    }
}
