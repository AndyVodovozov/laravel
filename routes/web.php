<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);

//Route::redirect('/user', '/owner');
Route::view('/info', 'welcome', ['name' => 'Andy']);

Route::post('/info1', [TestController::class, 'index']);
Route::put('/info2', [TestController::class, 'index']);
Route::patch('/info3', [TestController::class, 'index']);
Route::delete('/info4', [TestController::class, 'index']);
Route::options('/info5', [TestController::class, 'index']);

//Route::match(['get', 'post'], '/info', function (Request:) {
//    dd('match');
//});
