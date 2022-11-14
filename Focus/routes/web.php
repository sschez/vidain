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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/menu', 'App\Http\Controllers\HomeController@menu')->name("home.menu");
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name("user.create");
Route::post('/users/save', 'App\Http\Controllers\UserController@save')->name("user.save");
Route::get('/users', 'App\Http\Controllers\UserController@index')->name("user.index");