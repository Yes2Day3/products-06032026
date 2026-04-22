<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Car;
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
Route::put('/update/{product}/status', [ProductController::class, 'updateStatus']) -> name('updateStatus');
Route::get('/display-car', function () {
    $car = Car::create('BMW', '2010', 100000);
    return view('cars.show', ['car' => $car]);
});
Route::get('/display-cars', function () {
    $car1 = Car::create('BMW', '2010', 100000);
    $car2 = Car::create('Audi', '2000', 166);
    $car3 = Car::create('Ford', '1955', 1);
    $cars = [$car1, $car2, $car3];
    return view('cars.index', ['cars' => $cars]);
});
