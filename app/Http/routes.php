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
Route::any('/login','NotesController@index');
Route::any('/login/create','NotesController@create');
Route::any('/login/show','NotesController@show');
Route::any('/user/profile','NotesController@user');
Route::resource('notes','NotesController');

Route::any('test',function(){
	return view("login/create");
});



Route::any('/', function () {
    return view('welcome');
});
