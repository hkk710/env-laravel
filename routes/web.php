<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/send', 'HomeController@send');

Auth::routes();

Route::get('/municipal', 'municipalController@index');
Route::get('/industrial', 'industrialController@index');
Route::get('/biomedical', 'biomedicalController@index');
Route::get('/ewaste', 'ewasteController@index');