<?php

namespace Database\Seeders;

use App\Models\Cartitems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartitemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cartitem = new Cartitems();
        $cartitem->user_id = 1;
        $cartitem->product_id = 1;
        $cartitem->quantity = 2;
        $cartitem->price = 100.00;
        $cartitem->save();

        // You can add more cart items here as needed
    }
}
