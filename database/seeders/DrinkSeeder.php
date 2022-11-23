<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Drink;
class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drink::create([
            'name' => 'cola',
            'price' => 3.00,
        ]);
        Drink::create([
            'name' => 'sinas',
            'price' => 3.00,

        ]);
        Drink::create([
            'name' => 'sprite',
            'price' => 3.00,

        ]);

        
    }
}
