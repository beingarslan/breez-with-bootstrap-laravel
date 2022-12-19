<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderReturnedController extends Controller
{
    //
    public function index()
    {
        return view('order.returned');
    }
}
