<?php

namespace App\Http\Controllers;

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\View\View;

class UserController extends Controller implements HasMiddleware
{
    public function show(string $id): View
    {
        return view('user', [
            'user' => $id,
        ]);
    }

    public function update(): View
    {
        return view('user', [
            'user' => 'update',
        ]);
    }

    public static function middleware()
    {
        return [
            //new Middleware(EnsureTokenIsValid::class, only: ['show']),
            new Middleware(function (Request $request, \Closure $next) {
                dump('В контроллере');

                return $next($request);
            }, only: ['show']),
        ];
    }
}
