<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/category', function () {
    return view('category');
})-> name('category');

  Route::get('/', function () {
    return view('');
  })->name('');

Route::get('/product', function () {
    return view('product');
}) ->name('product');

Route::get('/ImportPage', function () {
    return view('import.ImportPage');
})->name('import');
