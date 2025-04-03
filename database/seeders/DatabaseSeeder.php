<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use App\Models\Cartitems;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(
            CategorySeeder::class
        );
        $this->call(ProductsSeeder::class);

        Category::factory(1000)->create();
        User::factory(1000)->create();
        
        Products::factory(1000)->create();

        Cartitems::factory(1000)->create();

    }
}
