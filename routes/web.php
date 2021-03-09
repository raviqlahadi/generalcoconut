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

Route::get('/', function () {
    return view('homepage.index');
});


Route::get('/about', function () {
    return view('about.index');
});

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/faq', function () {
    return view('faq.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});