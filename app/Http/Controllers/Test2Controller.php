<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $id)
    {
        return view('user', [
            'user' => $id,
        ]);

    }
}
