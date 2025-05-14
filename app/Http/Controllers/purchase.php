<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchase extends Controller
{
   public function addPurchase(){
    return view('purchase.addPurchase');
   }

    public function purchaseList(){
    return view('purchase.purchaseList');
   }
}
