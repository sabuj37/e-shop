<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\coustomerSupplier;
use App\Http\Controllers\Product;
use App\Http\Controllers\purchase;
use App\Http\Controllers\saleController;


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

Route::get('/product/list',[
    product::class,
    'productlist'
])->name('productlist');

//endProduct

//purchase str
Route::get('/add/purchase',[
    purchase::class,
    'addPurchase'
])->name('addPurchase');

Route::get('/purchase/list',[
    purchase::class,
    'purchaseList'
])->name('purchaseList');
//Purchase end
  

//sale start
Route::get('/new/sale',[
    saleController::class,
    'newsale'
])->name('newsale');
//sale end