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
Route::get('/categories', 'CategoriesController@all');
Route::get('/rock{category_id}', 'MusicController@all');
Route::get('/pop', 'MusicController@all');
Route::get('/novelas', 'BooksController@all');
Route::get('/policiales', 'BooksController@all');
Route::get('/infantiles', 'BooksController@all');
Route::get('/book/add','BooksController@add');
Route::get('/music/add','MusicController@add');
Route::get('/rock','MusicController@detail');
Route::get('/pop','MusicController@detail');
Route::get('/novelas','BooksController@detail');
Route::get('/policiales','BooksController@detail');
Route::get('/infantiles','BooksController@detail');

Route::get('/faq','FaqController@faq');
