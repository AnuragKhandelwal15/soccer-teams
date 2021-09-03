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

Route::name('api.')->group(function () {
    Route::get('/teams', 'TeamController@teams')->name('teams');
    Route::get('/team/{id}', 'TeamController@getPlayers')->name('getPlayers');
    Route::get('/player/{id}', 'TeamController@getPlayer')->name('getPlayer');
    Route::get('/players', 'PlayerController@players')->name('players');
});