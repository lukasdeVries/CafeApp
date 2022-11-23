<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_drink_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dish_id')
            ->refrences('id')
            ->on('dishes')
            ->nullable();
            $table->foreignId('drink_id')
            ->refrences('id')
            ->on('drinks')
            ->nullable();
            $table->foreignId('order_id')
            ->refrences('id')
            ->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish_drink_orders');
    }
};
