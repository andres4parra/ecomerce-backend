<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', Homecontroller::class);

Route::prefix('/prducts')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/create',  'create');
    Route::get('/{name}','show');
});