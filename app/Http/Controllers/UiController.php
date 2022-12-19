<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UiController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'required'
        ]);

        if ($validator->failed()) {
            abort(404);
        }

        return view('ui.index', [
            'title' => $request->page
        ]);
    }
}
