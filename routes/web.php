<?php

use Illuminate\Support\Facades\Route;

// passing data dari route '/' menuju ke view welcome
/*
Route::get('/', function () {
    $name = request('name');
    return view('welcome', ['name' => $name]);
});
*/

// passing data dari route '/' dijembatani controller menuju ke view welcome
// Route::get('/', 'WelcomeController@index');
Route::get('/', 'WelcomeController');   // invokable
Route::get('/show', 'WelcomeController@show');
Route::get('/create', 'WelcomeController@create');

// khusus untuk ArticleController
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/create', 'ArticleController@create'); // membuka form
Route::post('/articles/store', 'ArticleController@store');   // menyimpan data
Route::get('/articles/{article:slug}', 'ArticleController@show');   // Route Wildcard

Route::view('/home', 'home');

Route::view('/product', 'product');

Route::view('/contact', 'contact');

Route::view('gallery/index', 'gallery/index');
Route::view('gallery/create', 'gallery/create');
Route::view('gallery/show', 'gallery/show');
Route::view('gallery/edit', 'gallery/edit');
Route::view('gallery/delete', 'gallery/delete');
