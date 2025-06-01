<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\coustomerSupplier;
use App\Http\Controllers\productController;
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

Route::get('/logout',[
    userInfo::class,
    'logout'
])->name('logout');



//user info end
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['posAdmin'])->group(function(){

    Route::get('/dashboard',[
        dashboardController::class,
        'dashboard'
    ])->name('dashboard');

    //Coustomer&supplier Controller str
    Route::get('/add/customer',[
        coustomerSupplier::class,
        'addCustomer'
    ])->name('addCustomer');

    //coustomer save
    Route::post('/save/customer',[
        coustomerSupplier::class,
        'saveCustomer'
    ])->name('saveCustomer');

    //coustomer edit
    Route::get('/customer/edit/{id}',[
        coustomerSupplier::class,
        'editCustomer'
    ])->name('editCustomer');
    
    //coustomer delete
    Route::get('/customer/delete/{id}',[
        coustomerSupplier::class,
        'delCustomer'
    ])->name('delCustomer');

      //supplier add
    Route::get('/add/supplier',[
        coustomerSupplier::class,
        'addSupplier'
    ])->name('addSupplier');

    //supplier save
    Route::post('/save/supplier',[
        coustomerSupplier::class,
        'saveSupplier'
    ])->name('saveSupplier');

    //supplier edit
    Route::get('/supplier/edit/{id}',[
        coustomerSupplier::class,
        'editSupplier'
    ])->name('editSupplier');

    //Product delete
    Route::get('/supplier/delete/{id}',[
        coustomerSupplier::class,
        'delSupplier'
    ])->name('delSupplier');
    //Coustomer&supplier Controller end


    //Product 

    Route::get('/new/product',[
        productController::class,
        'addProduct'
    ])->name('addProduct');

    //Product save
    Route::post('/save/product',[
        productController::class,
        'saveProduct'
    ])->name('saveProduct');

    //Product edit
    Route::get('/product/edit/{id}',[
        productController::class,
        'editProduct'
    ])->name('editProduct');
    
    //Product delete
    Route::get('/product/delete/{id}',[
        productController::class,
        'delProduct'
    ])->name('delProduct');

    //Product list page
    Route::get('/product/list',[
        productController::class,
        'productlist'
    ])->name('productlist');

    //brand 

    Route::get('/create/brand',[
        productController::class,
        'addBrand'
    ])->name('addBrand');

    //brand save
    Route::post('/save/brand',[
        productController::class,
        'saveBrand'
    ])->name('saveBrand');

    //brand edit
    Route::get('/brand/edit/{id}',[
        productController::class,
        'editBrand'
    ])->name('editBrand');
    
    //brand delete
    Route::get('/brand/delete/{id}',[
        productController::class,
        'delBrand'
    ])->name('delBrand');

        //category 

    Route::get('/create/category',[
        productController::class,
        'addCategory'
    ])->name('addCategory');

    //category save
    Route::post('/save/category',[
        productController::class,
        'saveCategory'
    ])->name('saveCategory');

    //category edit
    Route::get('/category/edit/{id}',[
        productController::class,
        'editCategory'
    ])->name('editCategory');
    
    //category delete
    Route::get('/category/delete/{id}',[
        productController::class,
        'delCategory'
    ])->name('delCategory');

        //productUnit 

    Route::get('/create/productUnit',[
        productController::class,
        'addProductUnit'
    ])->name('addProductUnit');

    //productUnit save
    Route::post('/save/productUnit',[
        productController::class,
        'saveProductUnit'
    ])->name('saveProductUnit');

    //productUnit edit
    Route::get('/productUnit/edit/{id}',[
        productController::class,
        'editProductUnit'
    ])->name('editProductUnit');
    
    //productUnit delete
    Route::get('/productUnit/delete/{id}',[
        productController::class,
        'delProductUnit'
    ])->name('delProductUnit');

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

    // balance_sheet
        Route::get('/balance/sheet',[
        coustomerSupplier::class,
        'balancesheet'
    ])->name('expebalancesheet');
    // end_balancesheet
});