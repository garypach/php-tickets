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
    return view('pages/home');
});

Route::get('/movie', function () {
    return view('welcome');
});

Route::get('/showtimes', function () {
    return view('welcome');
});

Route::get('/seats', function () {
    return view('welcome');
});

Route::get('/tickets', function () {
    return view('welcome');
});

Route::get('/checkout', function () {
    return view('welcome');
});

Route::get('/thankyou', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/account/saved', function () {
    return view('welcome');
});