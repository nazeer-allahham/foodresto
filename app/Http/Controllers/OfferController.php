<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
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
        Offer::create(request([
            'description',
            'current_price',
            'meal_id'
        ]));

        session()->flash('message', 'Offer Created!!');

        return redirect('/admin');
    }
}
