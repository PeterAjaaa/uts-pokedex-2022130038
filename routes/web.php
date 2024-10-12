<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\HomeController;

Route::get('/', [PokemonController::class, 'index'])->name('pokemon.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('pokemon', PokemonController::class);
