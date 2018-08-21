<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas para la Administracion
Route::get('/backend',function(){
	return view ('backend.dashboard');
});

//Rutas del Frontend
    Route::get('nationality/{slug}', 'Frontend\PageController@nationality')->name('nationality');
    Route::get('biophoto/{slug}', 'Frontend\PageController@biophoto')->name('biophoto');
    Route::get('people/{slug}', 'Frontend\PageController@people')->name('people');

//Rutas del Backend
	Route::resource('nationality','backend\NationalityController');
	Route::resource('biophoto','Backend\NationalityController');
	Route::resource('people','Backend\NationalityController');

