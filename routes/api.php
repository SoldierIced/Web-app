<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace' => 'Api'], function () {
    Route::get('users/{id}', 'UsersController@show');
    Route::get('users', 'UsersController@index');
    Route::post('users', 'UsersController@store');
    Route::put('users/{id}', 'UsersController@update');
    Route::delete('users/{id}', 'UsersController@delete');

    Route::post('asignarnacionalidad', 'UsersController@asignar_nacionalidad');
    //nacionalidades
    Route::post('nacionalidades', 'NacionalidesController@store');
    Route::get('nacionalidades_user/{user}', 'NacionalidesController@get_users');

    Route::get('nacionalidades', 'NacionalidesController@index');
    Route::get('nacionalidades/{id}', 'NacionalidesController@show');
});
