<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\DishCategory;
use \App\Models\Table;
use \App\Models\Drink;
use \App\Models\Dish;


class PagesController extends Controller
{
    //returns view for ordering items 
    public function menu(){
        $categorys = DishCategory::all();
        $tables = Table::all();
        $drinks = Drink::all();
        $dishCount = Dish::count();
        $drinkCount = Drink::count();
        return view('menu', [
            'categories' => $categorys,
            'tables' => $tables,
            'drinks' => $drinks,
            'dishCount' => $dishCount,
            'drinkCount' => $drinkCount,
        ]);
    }
}
