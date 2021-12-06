<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = "Inixindo";
    return view('welcome', ['name' => $name]);
});

// Route::view('/', 'welcome');

Route::view('/home', 'home');

Route::view('/product', 'product');

Route::view('/contact', 'contact');

Route::view('gallery/index', 'gallery/index');
Route::view('gallery/create', 'gallery/create');
Route::view('gallery/show', 'gallery/show');
Route::view('gallery/edit', 'gallery/edit');
Route::view('gallery/delete', 'gallery/delete');
