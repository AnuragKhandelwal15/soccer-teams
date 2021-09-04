<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::name('api.')->group(function () {
    Route::get('/teams', 'TeamController@teams')->name('teams');
    Route::get('/team/{id}', 'PlayerController@getPlayers')->name('getPlayers');
    Route::get('/team-details/{id}', 'TeamController@teamDetail')->name('teamDetail');
    Route::post('/add/team', 'TeamController@addTeam')->name('add_team');
    Route::post('/edit/team', 'TeamController@updateTeam')->name('edit_team');

    Route::get('/players', 'PlayerController@players')->name('players');
    Route::get('/player/{id}', 'PlayerController@getPlayer')->name('getPlayer');
    Route::post('/add/player', 'PlayerController@addPlayer')->name('add_player');
    Route::post('/edit/player', 'PlayerController@updatePlayer')->name('edit_player');
});
