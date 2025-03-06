<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', Homecontroller::class);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/{name}', [ProductController::class, 'show']);