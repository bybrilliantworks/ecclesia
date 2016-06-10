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
//
Route::get('/', function () {
    return view('welcome');
});

Route::auth();



Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', 'HomeController@index');


    Route::get('/members', 'MemberController@index');

    Route::get('/members/create', 'MemberController@create');

    Route::post('/members', 'MemberController@store');

    Route::get('/members/{id}', 'MemberController@show');


    
});




Route::group(['domain' => '{church}.localhost:8000'], function(){

    Route::get('user/{id}', function($church, $id){
        return "My Church and Me" . $church . $id;
    });
});
