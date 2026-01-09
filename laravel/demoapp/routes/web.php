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

Route::get('/login',[CustomerController::class,'login'])->middleware('Ubefore');
Route::post('/login_auth',[CustomerController::class,'login_auth'])->middleware('Ubefore');
Route::get('/signup',[CustomerController::class,'create'])->middleware('Ubefore');
Route::post('/signup',[CustomerController::class,'store'])->middleware('Ubefore');

Route::get('/userlogout',[CustomerController::class,'userlogout'])->middleware('Uafter');
Route::get('/userprofile',[CustomerController::class,'userprofile'])->middleware('Uafter');
Route::get('/edit_profile/{id}',[CustomerController::class,'edit_profile'])->middleware('Uafter');
Route::post('/update_profile/{id}',[CustomerController::class,'update'])->middleware('Uafter');



Route::get('/contact',[ContactController::class,'create']);
Route::post('/contact',[ContactController::class,'store']);

Route::get('/shop',[ProductController::class,'index']);
Route::get('/shop-single',[ProductController::class,'single_shop']);


//=============Admin Routes======================================================

Route::group(['middleware'=>['Abefore']],function(){

    Route::get('/admin-login',[AdminController::class,'index']);
    Route::post('/admin_auth',[AdminController::class,'admin_auth']);

});

Route::group(['middleware'=>['Aafter']],function(){

    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });

    Route::get('/adminlogout',[AdminController::class,'adminlogout']);
    
    Route::get('/add_categories',[CategoryController::class,'create']);
    Route::post('/insert_categories',[CategoryController::class,'store']);
    Route::get('/manage_categories',[CategoryController::class,'show']);
    Route::get('/manage_categories/{id}',[CategoryController::class,'destroy']);
    Route::get('/add_product',[ProductController::class,'create']);
    Route::post('/insert_product',[ProductController::class,'store']);
    Route::get('/manage_product',[ProductController::class,'show']);
    Route::get('/manage_product/{id}',[ProductController::class,'destroy']);
    Route::get('/manage_customer',[CustomerController::class,'show']);
    Route::get('/manage_customer/{id}',[CustomerController::class,'destroy']);
    Route::get('/manage_contact',[ContactController::class,'show']);
    Route::get('/manage_contact/{id}',[ContactController::class,'destroy']);
});


Route::get('/nisha', function () {
    return view('demo');
});

Route::get('/blade', function () {
    return view('blade_template');
});
