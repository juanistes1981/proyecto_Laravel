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
Route::get('/shop','HomeController@home');
Route::get('/','HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/music', 'musicController@all');
Route::get('/book', 'booksController@all');
Route::get('/categories', 'CategoriesController@all');

Route::get('/pedidos', 'MusicController@detalle');
Route::get('/pedidos', 'BooksController@detalle');
Route::get('/pedidos', 'categoriesController@detalle');
Route::get('/cart', 'cartsController@cart');
Route::get("/addtocart/{id}", "cartsController@addToCart");

Route::get('/category/{id}', 'CategoriesController@detail');

Route::get('/faq','FaqController@faq');
Route::get('/contacto','ContactoController@contacto');
Route::get('/search', 'booksController@search');
Route::get('/music/add', 'musicController@add')->middleware("auth");
Route::get('/book/add', 'booksController@add')->middleware("auth");
Route::post('/music/add', 'musicController@store')->middleware("auth");
Route::post('/book/add', 'booksController@store')->middleware("auth");
Route::post('/music/add', 'musicController@delete')->middleware("auth");
Route::post('/book/add', 'booksController@delete')->middleware("auth");
