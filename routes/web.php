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
Route::get('/shop', 'HomeController@home');
Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/music', 'musicController@all');
Route::get('/book', 'booksController@all');
Route::get('/categories', 'CategoriesController@all');
Route::get('/pedidos', 'MusicController@detalle');
Route::get('/pedidos', 'BooksController@detalle');
Route::get('/pedidos', 'categoriesController@detalle');
Route::get('/cart', 'cartsController@cart');
Route::get("/addtocart/{id}", "cartsController@addToCart");
Route::delete('/removefromcart', 'cartsController@remove');

Route::get('/faq','FaqController@faq');
Route::get('/contacto','ContactoController@contacto');
Route::get('/search', 'musicController@searchmusic');
Route::get('/search', 'booksController@search');
Route::get('/music/add', 'musicController@all');
Route::get('/book/add', 'booksController@all');
