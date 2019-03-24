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
    Route::get('/members/{id}/edit', 'MemberController@edit');
    Route::put('/members/{id}', 'MemberController@update');

    Route::get('/projects', 'ProjectController@index');
    Route::get('/projects/create', 'ProjectController@create');
    Route::post('/projects', 'ProjectController@store');


    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/products', 'ProductController@store');


    Route::get('/assets', 'AssetController@index');
    Route::get('/assets/create', 'AssetController@create');
    Route::post('/assets', 'AssetController@store');


    Route::get('/attendance/store', 'AttendanceController@store');

    Route::get('/groups', 'GroupController@index');
    Route::post('/groups', 'GroupController@store');
    Route::get('/groups/create', 'GroupController@create');

    Route::resource('/events', 'EventController');
    Route::get('/events/{id}/attendance', 'EventController@attendance');
    Route::get('/events/attendance/check_in', 'EventController@checkIn');
    Route::get('/events/attendance/remove_checkin', 'EventController@undoCheckIn');
    Route::resource('/event_types', 'EventTypeController');

    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::put('users/{id}', 'UserController@update');
    Route::get('users/create', 'UserController@create');
    
});




Route::group(['domain' => '{church}.localhost:8000'], function(){

    Route::get('user/{id}', function($church, $id){
        return "My Church and Me" . $church . $id;
    });
});
