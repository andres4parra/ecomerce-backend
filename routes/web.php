<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', Homecontroller::class);

Route::get('/products', function () {
    echo "Listado de productos";
});

Route::get('/products/create', function () {
    echo "formulario para crear un producto";
});

Route::get('/products/{name}', function ($name,) {
    echo "Producto:$name";
});

Route::get('/products/{name}/{category}', function ($name,$category) {
    echo "Producto:$name, y tiene una categoria $category";
});



