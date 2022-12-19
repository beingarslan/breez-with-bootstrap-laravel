<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderNewController extends Controller
{
    //
    public function index()
    {
        return view('order.new');
    }
}
