<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
       $ListProducts = Products::paginate(); 
       return view('products.index',[
        'list' => $ListProducts
       ]); 
    }
    public function create(){
        return view('products.create');//retorna el formulario para crear un producto
    }
    public function show($id){

        $product = Products::find($id);
        return view('products.show',['product'=>$product]);//retorna el detalle de un producto
    }
    
}

