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
    return view('welcome');
});


Route::get('/register', "RegisterController@ver");

Route::get('/login', "LoginController@ver");

Route::get('/book', "BookController@ver");

Route::get('/music', "MusicController@ver");

Route::get('/rock', "RockController@ver");

Route::get('/pop', "PopController@ver");

Route::get('/Contacto', "ContactoController@ver");

Route::get('/footer', "FooterController@ver");

Route::get('/navBar', "NaBarController@ver");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
