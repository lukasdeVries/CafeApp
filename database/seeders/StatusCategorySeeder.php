<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\StatusCategory;

class StatusCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusCategory::create([
            'name' => 'recieved',
        ]);
        StatusCategory::create([
            'name' => 'ready to be served',
        ]);
        StatusCategory::create([
            'name' => 'delivered',
        ]);

    }
}
