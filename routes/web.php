<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', PokedexController::class)->name('pokedex');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('pokemon', PokemonController::class);
