<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/dishes', DishController::class);

Route::get('/dishes/{id}', [DishController::class, 'showDish'])->name('showDish')->where('dishId', '1');


Route::get('/about', function () {
    return view('pages.about.index');
});

Route::get('/work', function () {
    return view('pages.about.work');
});

Route::get('/services', function () {
    return view('pages.about.services');
});
