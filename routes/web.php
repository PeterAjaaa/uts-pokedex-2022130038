<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\HomeController;

Route::get('/', [PokemonController::class, 'index'])->name('pokemon.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::post('/store', [PokemonController::class, 'store'])->name('pokemon.store');
Route::get('/show', [PokemonController::class, 'show'])->name('pokemon.show');
Route::get('/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');
