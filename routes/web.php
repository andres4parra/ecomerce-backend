<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    echo "Listado de productos";
});

Route::get('/products/create', function () {
    echo "formulario para crear un producto";
});

Route::get('/products/{name}/{category}', function ($name,$category) {
    echo "Producto:$name, y tiene una categoria $category";
});



