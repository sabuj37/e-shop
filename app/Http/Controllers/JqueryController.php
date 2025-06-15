<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductUnit;
use App\Models\PurchaseProduct;
use App\Models\ProductStock;

class JqueryController extends Controller
{
    public function getProductDetails($id){
        $getData = Product::find($id);

        if($getData->count()>0):
            $purchaseHistory    = PurchaseProduct::find($getData->id);
            $stockHistory       = ProductStock::where(['productId'=>$getData->id])->get();
            if($stockHistory->count()>0):
                $currentStock   = $stockHistory->currentStock;
            else:
                $currentStock   = 0;
            endif;

            $productName = $getData->name;
            $buyingPrice = $getData->purchasePrice;
            // $productName = $getData->name;
            return ['productName' => $productName,'currentStock' => $currentStock, 'message'=>'Success ! Form successfully subjmit.'];
        else:
            return ['productName' => "",'currentStock' =>"", 'message'=>'Error ! There is an error. Please try agin.'];
        endif;
    }
}
