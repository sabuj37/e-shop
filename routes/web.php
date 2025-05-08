<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[
    dashboardController::class,
    'dashboard'
])->name('dashboard');