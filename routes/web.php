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

Auth::routes();

Route::get('/', function () {
    return view('auth.register');
});

Route::post('/', "Controller@create_new_user");

Route::get('/fi/home', 'HomeController@fi_index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/index', function () {
    return view('index');
});
*/