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
    return view('website/index');
});

Route::get('/about', function () {
    return view('website/about');
});

Route::get('/contact', function () {
    return view('website/contact');
});

Route::get('/shop', function () {
    return view('website/shop');
});

Route::get('/shop-single', function () {
    return view('website/shop-single');
});



Route::get('/nisha', function () {
    return view('demo');
});

Route::get('/blade', function () {
    return view('blade_template');
});
