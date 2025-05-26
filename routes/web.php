<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\coustomerSupplier;
use App\Http\Controllers\Product;
use App\Http\Controllers\purchase;
use App\Http\Controllers\saleController;
use App\Http\Controllers\userInfo;
use App\Http\Controllers\expenseController;

//user info str
Route::get('/login',[
    userInfo::class,
    'userLogin'
])->name('userLogin');

Route::post('creat/admin',[
    userInfo::class,
    'creatAdmin'
])->name('creatAdmin');

Route::post('admin/login',[
    userInfo::class,
    'adminLogin'
])->name('adminLogin');

Route::get('/user/lock/screen',[
    userInfo::class,
    'userLockScreen'
])->name('userLockScreen');

Route::get('/user/recover',[
    userInfo::class,
    'userRecover'
])->name('userRecover');


Route::get('/user/recover/code',[
    userInfo::class,
    'userRecoverCode'
])->name('userRecoverCode');


Route::get('/user/recover/password',[
    userInfo::class,
    'userRecoverPassword'
])->name('userRecoverPassword');


Route::get('/business/setup',[
    userInfo::class,
    'storeCreat'
])->name('storeCreat');

Route::get('/user/confirm/mail',[
    userInfo::class,
    'userConfirmMail'
])->name('userConfirmMail');



//user info end
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

// expense

Route::get('/expense/type',[
    expenseController::class,
    'expensetype'
])->name('expensetype');

Route::get('/expense',[
    expenseController::class,
    'expense'
])->name('expense');
// endexpense