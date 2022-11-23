<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'dish_categories';

    public function dishes(){
        return $this->hasmany(Dish::class, 'dish_category_id');
    }
}
