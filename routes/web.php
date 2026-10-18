<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;



Route::get('/', [HomeController::class, 'index']);


Route::get('/products/create',[ProductController::class, 'createProduct']);

Route::post('/products/create',[ProductController::class, 'store']);


// Categories
Route::get('/categories', [CategoryController::class, 'getAllCategory']);
Route::get('/categories/create', function(){
    return view('create_categories');
});
Route::post('/categories/create',[CategoryController::class, 'store']);
