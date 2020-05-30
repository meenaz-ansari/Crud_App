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

Route::get('/signin', function () {
    return view('welcome');
});
//Dashboard route
Route::get('/Dashboard','DashboardController@index');


//student routes
Route::get('/index','studentController@index');
Route::get('/create','studentController@create');
Route::post('/store','studentController@store');
Route::get('/edit/{id}','studentController@edit');
Route::post('/update/{id}','studentController@update');
Route::delete('/delete/{id}','studentController@destroy');





//staff routes
Route::get('/staff/index','StaffController@index');
Route::get('/staff/create','StaffController@create');
Route::post('/staff/store','StaffController@store');
Route::get('/staff/edit/{id}','StaffController@edit');
Route::post('/staff/update/{id}','StaffController@update');
Route::delete('/staff/delete/{id}','StaffController@destroy');
 
