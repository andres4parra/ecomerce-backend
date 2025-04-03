<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Category::factory(100)->create();
        User::factory(100)->create();
        
        Products::factory(100)->create();
    }
}
