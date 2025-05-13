<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\coustomerSupplier;
use App\Http\Controllers\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[
    dashboardController::class,
    'dashboard'
])->name('dashboard');

//Coustomer&supplier Controller str
Route::get('/add/customer',[
    coustomerSupplier::class,
    'addCustomer'
])->name('addCustomer');

Route::get('/add/supplier',[
    coustomerSupplier::class,
    'addSupplier'
])->name('addSupplier');
//Coustomer&supplier Controller end


//Product

Route::get('/new/product',[
    product::class,
    'Product'
])->name('newProduct');

//endProduct
