<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderProcessedController extends Controller
{
    //
    public function index()
    {
        return view('order.processed');
    }
}
