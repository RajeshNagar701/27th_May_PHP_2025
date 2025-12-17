<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
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

Route::get('/contact',[ContactController::class,'index']);


Route::get('/shop',[ProductController::class,'index']);
Route::get('/shop-single',[ProductController::class,'single_shop']);


//=============Admin Routes======================================================


Route::get('/admin-login',[AdminController::class,'index']);

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/add_categories',[CategoryController::class,'create']);
Route::get('/manage_categories',[CategoryController::class,'show']);
Route::get('/add_product',[ProductController::class,'create']);
Route::get('/manage_product',[ProductController::class,'show']);
Route::get('/manage_customer',[CustomerController::class,'show']);
Route::get('/manage_contact',[ContactController::class,'show']);








Route::get('/nisha', function () {
    return view('demo');
});

Route::get('/blade', function () {
    return view('blade_template');
});
