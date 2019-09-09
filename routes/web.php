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


Auth::routes();
Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/music', 'MusicController@all');
Route::get('/books', 'BooksController@all');
Route::get('/categories/{id}','MusicController@detail');
Route::get('/book/add','BooksController@add')->middleware("Auth");
Route::get('/music/add','MusicController@add')->middleware("Auth");
