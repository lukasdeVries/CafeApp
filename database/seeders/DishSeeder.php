<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dish::create([
            'dish_category_id' => 2,
            'name' => 'pistolet geitenkaas',
            'price' => 5.50,
        ]);
        Dish::create([
            'dish_category_id' => 2,
            'name' => 'pistolet tonijn',
            'price' => 5.50,
        ]);
        Dish::create([
            'dish_category_id' => 1,
            'name' => 'soep',
            'price' => 4.00,
        ]);
        Dish::create([
            'dish_category_id' => 3,
            'name' => 'ijs',
            'price' => 2.00,
        ]);




    }
}
