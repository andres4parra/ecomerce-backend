<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
       return view('products.index'); //retorna un listado de productos
    }
    public function create(){
        return view('products.create');//retorna el formulario para crear un producto
    }
    public function show($name){
        return view('products.show');//retorna el detalle de un producto
    }
    
}

