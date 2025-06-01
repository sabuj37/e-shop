<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductUnit;

use Illuminate\Http\Request;

class purchase extends Controller
{
   public function addPurchase(){
        $supplier = Supplier::orderBy('id','DESC')->get();
        $product = Product::orderBy('id','DESC')->get();
        $productUnit = ProductUnit::orderBy('id','DESC')->get();
        $category = Category::orderBy('id','DESC')->get();
        $brand = Brand::orderBy('id','DESC')->get();
    return view('purchase.addPurchase',['brandList'=>$brand,'categoryList'=>$category,'productUnitList'=>$productUnit,'supplierList'=>$supplier,'productList'=>$product]);
   }

    public function purchaseList(){
    return view('purchase.purchaseList');
   }
}
