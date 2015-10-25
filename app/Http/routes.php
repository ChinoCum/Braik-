<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::any('/login','LogController@index');
Route::any('/login/create','NotesController@create');
Route::any('/login/show','NotesController@show');
Route::resource('notes','NotesController');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});


Route::any('profile',function(){
	return view("user/profile");
});

Route::any('/', function () {
    return view('welcome');
});

Route::group(['before' => 'auth'], function()
{
    Route::get('/', 'HomeController@showWelcome'); // Vista de inicio
});
Route::get('dashboard', function () {
    return redirect('/user/profile');
});