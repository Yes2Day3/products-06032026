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
Route::get('/products', [ProductController::class, 'show']) -> name('index');
Route::get('/products/create', [ProductController::class, 'create']) -> name('products.create'); 
Route::post('/store', [ProductController::class, 'store']);
Route::get('/view/{product}', [ProductController::class, 'view']) -> name('view');
Route::get('/edit/{product}', [ProductController::class, 'edit']) -> name('edit');
Route::put('/update/{product}', [ProductController::class, 'update']) -> name('update'); 
Route::delete('/delete/{product}', [ProductController::class, 'delete']) -> name('delete');