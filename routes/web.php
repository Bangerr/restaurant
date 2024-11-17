<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;


Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/dishes', [DishController::class, 'index'])->name('dishes.index');

Route::get('/dishes/{id}', [DishController::class, 'showDish'])->name('dishes.show');


Route::get('/about', function () {
    return view('pages.about.index');
});

Route::get('/work', function () {
    return view('pages.about.work');
});

Route::get('/services', function () {
    return view('pages.about.services');
});

Route::get('image-upload', [ImageController::class, 'upload'])->name('image.upload');
Route::post('image-store', [ImageController::class, 'store'])->name('image.upload.post');
