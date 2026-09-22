<?php

use App\Http\Controllers\Api\TestDatabaseController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/our-people', function () {
    return view('our-people');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/newsdetail', function () {
    return view('newsdetail');
})->name('newsdetail');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/test-db', [TestDatabaseController::class, 'index']);
