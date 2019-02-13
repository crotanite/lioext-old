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

Route::get('/', function()
{
    return view('master');
});

Route::post('/lioimage', ['uses' => 'FormController@lioimage']);
Route::post('/liogene', ['uses' => 'FormController@liogene']);
Route::post('/liocost', ['uses' => 'FormController@liocost']);