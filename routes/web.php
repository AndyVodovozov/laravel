<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index'])
    ->middleware(EnsureTokenIsValid::class);

Route::view('/info', 'welcome', ['name' => 'Andy']);

Route::view('/', 'welcome')->name('home');
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/user', [UserController::class, 'update']);*/

Route::withoutMiddleware([Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class])->group(function () {
    Route::resource('users', User2Controller::class)
        ->missing(function () {
            dd('Элемент не найден');
        });
});

Route::view('/', 'welcome')->name('welcome');
