<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('admin');
});

Route::get('/user/{id?}', function (?string $userId = null) {
    //dd("user {$userId}");
    dd(Route::currentRouteName());
})->name('user.info');

Route::get('/post/{search}', function (string $search) {
    dd($search);
})->where('search', '.*');
