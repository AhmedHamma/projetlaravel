<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BackofficeController;
use App\Http\Controllers\backoffice\AddController;
use App\Http\Controllers\backoffice\ModifController;
use App\Http\Controllers\backoffice\SupprController;

/*

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
//Route::get('/product/{id}',[ProductController::class,'productId']);


Route::get('/cart',[\App\Http\Controllers\CartController::class,'cart']);

Route::get('/productname',[ProductController::class,'product_list_sortByname']);
Route::get('/productprice',[ProductController::class,'product_list_sortByPrice']);
Route::get('/productnameandprice/{id}',[ProductController::class,'product_list_OneProduct']);

Route::get('/backoffice',[BackofficeController::class, 'index']);
Route::get('/backoffice/ajout', [ProductController::class, 'create']);
Route::post('/backoffice/result',[ProductController::class, 'store']);

Route::get('/backoffice/modif/{id}', [ProductController::class, 'edit']);
Route::put('/backoffice/modif/{id}', [ProductController::class, 'update']);
Route::delete('/backoffice/suppr/{id}', [ProductController::class, 'destroy']);
