<?php

use Illuminate\Support\Facades\Route;

    Route::get('/codesa/users','UserController@index');
    Route::post('/codesa/create/users','UserController@store');
    Route::get('/codesa/show/users','UserController@show');
    Route::post('/codesa/update/users','UserController@update');
    Route::get('/codesa/delete/users','UserController@destroy');
