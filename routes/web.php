<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::get('/', DishController::class);

Route::get('/about', function(){
    return view('pages.about.index');
});

Route::get('/work', function(){
    return view('pages.about.work');
});

Route::get('/services', function(){
    return view('pages.about.services');
});

