<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/category', function () {
//     return view('category');
// })-> name('category');

// Route::get('/product', function () {
//     return view('product');
// }) ->name('product');

// Route::get('/ImportPage', function () {
//     return view('import.ImportPage');
// })->name('import'); --alias

Route::get('/Portfolio', function(){
    return view('Portfolio');
}) -> name('profile');

Route::get('/About', function(){
    return view('About');
}) -> name('about');

Route::get('/Contacts', function(){
    return view('/Contacts');
}) -> name('contact');

