<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\DishCategory;

class DishCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DishCategory::create([
            'name' => 'voor gerecht'
        ]);
        DishCategory::create([
            'name' => 'hoofd gerecht'
        ]);
        DishCategory::create([
            'name' => 'desert'
        ]);
        DishCategory::create([
            'name' => 'drink'
        ]);



    }
}
