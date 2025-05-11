<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coustomerSupplier extends Controller
{
    // add coustomer
    public function addCustomer(){
        return view('customer&supplier.addCustomer');
    }

    // add supplier
    public function addSupplier(){
        return view('customer&supplier.addSupplier');
    }
}
