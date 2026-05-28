<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/expensive', [ProductController::class, 'filtered'])->name('products.filtered');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/cairo', [CustomerController::class, 'filtered'])->name('customers.filtered');
