<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PokemonController::class, 'index'])->name('pokemons.list');
Route::get('pokemons/create', [PokemonController::class, 'create'])->name('pokemons.create');
Route::get('pokemons/{title}', [PokemonController::class, 'show'])->name('pokemons.show');
Route::post('/', [PokemonController::class, 'store'])->name('pokemons.store');
