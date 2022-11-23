<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Order;
use \App\Models\DishDrinkOrder;

class OrderController extends Controller
{
    public function store(Request $request){
        $order = Order::Create([
            'table_id' => $request->tables_select,
        ]);

        if ($request->dish != null) {
            foreach($request->dish as $dish){
                DishDrinkOrder::create([
                    'order_id' => $order->id,
                    'dish_id' => $dish,
                ]);
            }
        }
      
        if($request->drink != null) {
            foreach($request->drink as $drink){
                DishDrinkOrder::create([
                    'order_id' => $order->id,
                    'drink_id' => $drink,
                ]);
            }
        }
       
        return back()->with('message', 'bestelling is succesvol');
    }
}
