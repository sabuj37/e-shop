<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductUnit;

class JqueryController extends Controller
{
    public function getProductDetails($id){
        $getData = Product::find($id);

        if($getData->count()>0):
            $productName = $getData->name;
            $buyingPrice = $getData->purchasePrice;
            // $productName = $getData->name;
            return ['productName' => $productName,'buyPrice' => $buyingPrice, 'message'=>'Success ! Form successfully subjmit.'];
        else:
            return ['productName' => "",'buyPrice' =>"", 'message'=>'Error ! There is an error. Please try agin.'];
        endif;
    }
}
