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
Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('home');
Route::get('/team/{id}/players', 'App\Http\Controllers\FrontendController@getPlayers')->name('getPlayers');
Route::get('/team/{name}/player/{id}', 'App\Http\Controllers\FrontendController@getPlayer')->name('getPlayer');