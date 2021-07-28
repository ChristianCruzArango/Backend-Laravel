<?php

use Illuminate\Support\Facades\Route;


Route::get('/codesa/roles','RolesController@index');
Route::post('/codesa/roles/store','RolesController@store');
