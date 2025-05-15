<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function product(){
      return view('product.newProduct');
   }


   public function productlist(){
      return view('product.productList');
   }
}
