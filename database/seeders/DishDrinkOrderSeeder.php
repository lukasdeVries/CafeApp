<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\DishDrinkOrder;

class DishDrinkOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DishDrinkOrder::create([
            'dish_id' => 1,
            'drink_id' => null,
            'order_id' => 1,

        ]);
        DishDrinkOrder::create([
            'dish_id' => null,
            'drink_id' => 2,
            'order_id' => 1,

        ]);
        DishDrinkOrder::create([
            'dish_id' => 2,
            'drink_id' => null,
            'order_id' => 1,

        ]);
        DishDrinkOrder::create([
            'dish_id' => 1,
            'drink_id' => null,
            'order_id' => 1,

        ]);

    }
}
