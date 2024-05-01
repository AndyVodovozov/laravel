<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all());
        //return redirect()->route('user.info', ['id' => 1]);
        return response()->json(['url' => route('user.info', ['id' => 1])]);
    }
}
