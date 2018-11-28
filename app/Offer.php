<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Meal;

class Offer extends Model
{
    protected $fillable = [
        'description', 'current_price', 'meal_id'
    ];

    public function meal()
    {
        return Meal::find($this->meal_id);
    }
}
