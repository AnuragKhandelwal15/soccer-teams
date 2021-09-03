<?php

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

// remove register route
Auth::routes(['register' => false]);

// Front controller for guest users
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/team/{id}/players', 'FrontendController@getPlayers')->name('getPlayers');
Route::get('/player/{id}/team', 'FrontendController@getPlayer')->name('getPlayer');

