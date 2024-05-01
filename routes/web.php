<?php

use App\Http\Controllers\TestController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index'])
    ->middleware(EnsureTokenIsValid::class);

//Route::redirect('/user', '/owner');
Route::view('/info', 'welcome', ['name' => 'Andy']);

Route::view('/', 'welcome')->name('home');

/*Route::post('/info1', [TestController::class, 'index']);
Route::put('/info2', [TestController::class, 'index']);
Route::patch('/info3', [TestController::class, 'index']);
Route::delete('/info4', [TestController::class, 'index']);
Route::options('/info5', [TestController::class, 'index']);*/

//Route::match(['get', 'post'], '/info', function (Request:) {
//    dd('match');
//});
