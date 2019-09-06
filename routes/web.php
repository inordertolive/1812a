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

Route::get('/', function () {
#phpinfo();die;
    return view('welcome');
});
Route::get('/add/user','TestController@add');
Route::get('/get/redis','TestController@redis');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
