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
use \App\Http\Controllers\ProductController;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::get('/product',[ProductController::class,'product']);
Route::get('/product/{id}',[ProductController::class,'productId']);


Route::get('/cart',[\App\Http\Controllers\CartController::class,'cart']);

Route::get('/productname',[ProductController::class,'product_list_sortByname']);
Route::get('/productprice',[ProductController::class,'product_list_sortByPrice']);
Route::get('/productnameandprice/{id}',[ProductController::class,'product_list_OneProduct']);

