<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Http\Request;

class saleController extends Controller
{
    Public function newsale (){
        $customer = Customer::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        return view('sale.newsale',['customerList'=>$customer,'productList'=>$product]);

    }
}
