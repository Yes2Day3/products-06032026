<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return '<h1>About this page</h1>';
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/products', [ProductController::class, 'show']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store']);
Route::get('/view/{id}', [ProductController::class, 'view']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::put('/update/{id}', [ProductController::class, 'update']);
Route::get('/delete/{id}', [ProductController::class, 'delete']);