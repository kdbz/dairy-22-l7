<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('home', function () {
    return view('dashboard');
});

//Role Routes
Route::get('roles','RoleController@all');
Route::get('role/add','RoleController@add');

//User Routes
Route::get('users','UserController@all');
Route::get('user/add','UserController@add');

//Cow Routes
Route::get('cows','CowController@all');
Route::get('cow/add','CowController@add');
Route::post('cow/save','CowController@save');
Route::post('cow/delete','CowController@delete');

Route::get('cow/edit','CowController@edit');
//your homework - route for saving the edits POST...




//Produce Routes
Route::get('produce','ProduceController@all');
Route::get('produce/add','ProduceController@add');
