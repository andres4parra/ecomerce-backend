<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria_elec = new Category();
        $categoria_elec->name= 'Electrodomesticos';
        $categoria_elec->description = 'Esta es la categoria electrodomesticos...';
        $categoria_elec->save();

        $categoria_2 = new Category();
        $categoria_2->name= 'ropa';
        $categoria_2->description = 'Esta es la categoria electrodomesticos...';
        $categoria_2->save();
    }
}
