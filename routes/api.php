<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\\Http\\Controllers\\Codesa')->group(function () {
    Route::get('/codesa/roles','RolesController@index');

    /*User  */
    Route::get('/codesa/users','UserController@index');
    Route::post('/codesa/create/users','UserController@store');
    Route::get('/codesa/show/users','UserController@show');
    Route::post('/codesa/update/users','UserController@update');
    Route::get('/codesa/delete/users','UserController@destroy');

});



