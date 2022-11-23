<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishDrinkOrder extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'dish_drink_orders';

}
