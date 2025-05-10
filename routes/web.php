<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\coustomerSupplier;

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
//Coustomer&supplier Controller end
