<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function save(Request $request)
    {

        return back();
    }

    public function update(Request $request) 
    {
        if(request('type') == 'push')
        {
            if(request('category') == 'offer') 
            {
                $order = $request->session()->get('order');
                if(is_null($order))
                {
                    $order = array();
                }
                array_push($order, request('title'));
                $request->session()->put('order', $order);
            }
        }
        return back();
    }

    public function clear(Request $request) 
    {
        $request->session()->pull('order');
        return back();
    }
}
