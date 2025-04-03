<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products; // Ensure this path matches the actual location of the Products model

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    
    {
        $products = new Products();
        $products->name = 'Lavadora';
        $products->description = 'Lavadora de ropa';
        $products->price = 1000;
        $products->category_id = 1;
        $products->save();

        $products = new Products();
        $products->name = 'Secadora';
        $products->description = 'Secadora de ropa';
        $products->price = 1000;
        $products->category_id = 1;
        $products->save();

    }
}
