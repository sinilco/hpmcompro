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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', 'App\Http\Controllers\LandingController@homepage');
Route::get('/about', 'App\Http\Controllers\LandingController@about');
Route::get('/contacts', 'App\Http\Controllers\LandingController@contacts');
Route::get('/services', 'App\Http\Controllers\LandingController@services');
Route::get('/projects', 'App\Http\Controllers\LandingController@projects');
Route::get('/products', 'App\Http\Controllers\LandingController@products');
Route::get('/order', 'App\Http\Controllers\LandingController@order');