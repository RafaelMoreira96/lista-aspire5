<?php

use App\Http\Controllers\GameController;
use App\Models\Game;
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

Route::get('index', 'GameController@index');

Route::get('konami', function () {
    $games = Game::all(); // Esta linha está puxando todos os dados da tabela 'Game'
    return view('godmode', compact('games')); //aqui vai retornar a view index
});

Route::resource('games', GameController::class);
