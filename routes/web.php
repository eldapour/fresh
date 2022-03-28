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

//Route::get('/index', function () {
//    return view('index');
//});

Route::view('/','index')->name('index');

Route::post('/contact', 'ContactController@store')->name('contact');

Route::get('/about', 'ContactController@about')->name('about');
Route::get('/portfolio', 'ContactController@portfolio')->name('portfolio');

