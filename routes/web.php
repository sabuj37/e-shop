<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\coustomerSupplier;
use App\Http\Controllers\productController;
use App\Http\Controllers\purchase;
use App\Http\Controllers\saleController;
use App\Http\Controllers\userInfo;
use App\Http\Controllers\expenseController;
use App\Http\Controllers\JqueryController;
use App\Http\Controllers\reportController;

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

    
    // submit supplier by ajax
    Route::get('/customer/save',[
        coustomerSupplier::class,
        'createCustomer'
    ])->name('createCustomer');

    //supplier---------------------------

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

    // submit supplier by ajax
    Route::get('/supplier/save',[
        coustomerSupplier::class,
        'createSupplier'
    ])->name('createSupplier');

    //supplier edit
    Route::get('/supplier/edit/{id}',[
        coustomerSupplier::class,
        'editSupplier'
    ])->name('editSupplier');

    //supplier delete
    Route::get('/supplier/delete/{id}',[
        coustomerSupplier::class,
        'delSupplier'
    ])->name('delSupplier');
    //Coustomer&supplier Controller end


    //Product -------------------------

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

    // submit product by ajax
    Route::get('/product/save',[
        productController::class,
        'createProduct'
    ])->name('createProduct');


    //brand -----------------------------

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

    
    // submit brand by ajax
    Route::get('/brand/save',[
        productController::class,
        'createBrand'
    ])->name('createBrand');

        //category ----------------------
    
    Route::get('/create/category',[
        productController::class,
        'addCategory'
    ])->name('addCategory');

    //category save for
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

    
    // submit category by ajax
    Route::get('/category/save',[
        productController::class,
        'createCategory'
    ])->name('createCategory');

        //productUnit --------------------------

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

    
    // submit productUnit by ajax
    Route::get('/productUnit/save',[
        productController::class,
        'createProductUnit'
    ])->name('createProductUnit');

    //endProduct

    //purchase str-------------------------

    Route::get('/add/purchase',[
        purchase::class,
        'addPurchase'
    ])->name('addPurchase');

    Route::get('/purchase/list',[
        purchase::class,
        'purchaseList'
    ])->name('purchaseList');
    //Purchase end
    

    //sale start--------------------------

    Route::get('/new/sale',[
        saleController::class,
        'newsale'
    ])->name('newsale');
    //sale end

    // expense------------------------

    Route::get('/expense/type',[
        expenseController::class,
        'addExpense'
    ])->name('addExpense');

    //expense save for
    Route::post('/save/expense',[
        expenseController::class,
        'saveExpense'
    ])->name('saveExpense');

    //expense edit
    Route::get('/expense/edit/{id}',[
        expenseController::class,
        'editExpense'
    ])->name('editExpense');
    
    //expense delete
    Route::get('/expense/delete/{id}',[
        expenseController::class,
        'delExpense'
    ])->name('delExpense');

    
    // submit Expense by ajax
    Route::get('/expense/save',[
        expenseController::class,
        'createExpense'
    ])->name('createExpense');

    Route::get('/expense',[
        expenseController::class,
        'expense'
    ])->name('expense');
    // endexpense

    // balance_sheet------------------------

        Route::get('/balance/sheet',[
        coustomerSupplier::class,
        'balancesheet'
    ])->name('balancesheet');
    // end_balancesheet


    // supplierbalance
     Route::get('supplier/balance/sheet',[
        coustomerSupplier::class,
        'supplierbalancesheet'
    ])->name('supplierbalancesheet');


    // jquery routes are goes here
    Route::get('product/details/{id}',[
        JqueryController::class,
        'getProductDetails'
    ])->name('getProductDetails');
    
    Route::post('/purchase/save/data',[
        JqueryController::class,
        'savePurchase'
    ])->name('savePurchase');
    
    Route::get('sale/product/details/{id}',[
        JqueryController::class,
        'getSaleProductDetails'
    ])->name('getSaleProductDetails');

    // endsupplierbalance


    //Report------------------------

    //stock report
    Route::get('stock/report/',[
        reportController::class,
        'addStockReport'
    ])->name('addStockReport');

    //sales report
    Route::get('sales/report/',[
        reportController::class,
        'addSalesReport'
    ])->name('addSalesReport');

    //top customer  report
    Route::get('top-customer/report/',[
        reportController::class,
        'addTopCustomerReport'
    ])->name('addTopCustomerReport');

});