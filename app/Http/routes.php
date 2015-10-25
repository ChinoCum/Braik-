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
Route::any('/thprofile/show','NotesController@show');
Route::resource('notes','NotesController');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');


Route::any('profile',function(){
	return view("user/profile");
});

Route::any('thprofile',function(){
	return view("teachers/thprofile");
});

Route::any('/', function () {
        $user =  User::find(14);
        $user->roles()->attach(1);
        return 'lol';
});

Route::get('dashboard', function () {
    return redirect('/user/profile');
});

