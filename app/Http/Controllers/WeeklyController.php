<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeeklyController extends Controller
{
    //
    public function index ()
    {
        return view('weekly');
    }
}
