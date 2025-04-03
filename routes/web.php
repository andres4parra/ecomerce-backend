<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', [HomeController::class, 'index']);

// Prefijo corregido a "/products"
Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::post('/', 'store')->name('products.store');
    Route::get('/{id}', 'show')->name('products.show');
});
