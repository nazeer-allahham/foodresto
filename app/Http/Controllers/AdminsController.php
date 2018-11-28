<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.index', ['meals' => \App\Meal::all(), 'offers' => \App\Offer::all()]);
    }
}
