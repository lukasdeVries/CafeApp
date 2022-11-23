<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'table_id' => 1,
            'status_id' => 1,
        ]);
        Order::create([
            'table_id' => 2,
            'status_id' => 1,
        ]);
        Order::create([
            'table_id' => 3,
            'status_id' => 1,
        ]);
        Order::create([
            'table_id' => 4,
            'status_id' => 1,
        ]);
        Order::create([
            'table_id' => 5,
            'status_id' => 1,
        ]);

    }
}
