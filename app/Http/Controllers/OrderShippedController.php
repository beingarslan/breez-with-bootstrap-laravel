<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderShippedController extends Controller
{
    //
    public function index ()
    {
        return view('order.shipped');
    }
}
