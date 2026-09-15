<?php

use App\Http\Controllers\Api\TestDatabaseController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/test-db', [TestDatabaseController::class, 'index']);
