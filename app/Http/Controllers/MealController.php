<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class MealController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {

    }

    public function store()
    {
        Meal::create(request([
            'title',
            'description',
            'price',
            'image'
        ]));

        session()->flash('message', 'Meal Created!!');

        return redirect('/admin');
    }
}
