<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductUnit;
use App\Models\PurchaseProduct;
use App\Models\ProductStock;
use App\Models\ProductSerial;
use Alert;

class JqueryController extends Controller
{
    public function getProductDetails($id){
        $getData = Product::find($id);

        if($getData->count()>0):
            $stockHistory       = ProductStock::where(['productId'=>$getData->id])->get();
            if(!empty($stockHistory)):
                $currentStock   = $stockHistory->sum('currentStock');
            else:
                $currentStock   = 0;
            endif;

            // $purchaseHistory = ProductPurchase::where(['productId'=>$getData->id])->get();

            $productName = $getData->name;
            // $buyingPrice = $getData->purchasePrice;
            // $productName = $getData->name;
            return ['productName' => $productName, 'currentStock' => $currentStock, 'message'=>'Success ! Form successfully subjmit.','id'=> $getData->id];
        else:
            return ['productName' => "",'currentStock' =>"", 'message'=>'Error ! There is an error. Please try agin.','id'=>''];
        endif;    
    }

    public function getSaleProductDetails($id){
        $getData = PurchaseProduct::where(['productId'=>$id])
        ->join('suppliers','purchase_products.supplier','suppliers.id')
        ->join('product_stocks','product_stocks.purchaseId','purchase_products.id')
        ->select(
            'purchase_products.id as purchaseId',
            'purchase_products.supplier',
            'purchase_products.buyPrice',
            'purchase_products.salePriceExVat',
            'purchase_products.salePriceInVat',
            'purchase_products.vatStatus',
            'purchase_products.created_at',
            'purchase_products.created_at as purchaseDate',
            'suppliers.name as supplierName',
            'suppliers.mail as supplierMail',
            'suppliers.mobile as supplierMobile',
            'product_stocks.currentStock',
        )->orderBy('purchaseId','desc')->get();

        //purchase product
        if($getData->count()>0):
            $product        = Product::find($id);
            $productName    = $product->name;
            $salePrice      = $getData->first()->salePriceExVat;
            $buyPrice       = $getData->first()->buyPrice;

            return ['productName' => $productName, 'id'=>$getData->first()->purchaseId, 'getData' => $getData, 'buyPrice'=> $buyPrice, 'salePrice'=>$salePrice];
        else:
            return ['productName' => "", 'id'=>$id, 'getData' => null, 'buyPrice'=>'', 'salePrice'=>''];
        endif;
    }
    public function getPurchaseDetails($id){
        $getData = PurchaseProduct::find($id);
        if($getData->count()>0){
            $salePrice      = $getData->salePriceExVat;
            $buyPrice       = $getData->buyPrice;
            return ['id'=>$id, 'buyPrice'=> $buyPrice, 'getData' => $getData, 'salePrice'=>$salePrice];
        }else{
            return ['id'=>"", 'buyPrice'=> "", 'getData' => null, 'salePrice'=>""];
        }
    }

    public function savePurchase(Request $requ){
        // return $requ;
        // return $serial = count($requ->serialNumber);
        $purchaseHistory    = PurchaseProduct::where(['productName'=>$requ->productName,'qty'=>$requ->qty,'supplier'=>$requ->supplierName,'purchase_date'=>$requ->purchaseDate])->get();
        if($purchaseHistory->count()>0):
            Alert::error('Opps! Purchase history already exist');
            return back();
        else:
            $purchase = new PurchaseProduct();

            $purchase->productName      = $requ->productName;
            $purchase->supplier         = $requ->supplierName;
            $purchase->purchase_date    = $requ->purchaseDate;
            $purchase->invoice          = $requ->invoiceData;
            $purchase->reference        = $requ->refData;
            $purchase->qty              = $requ->qty;
            $purchase->buyPrice         = $requ->buyingPrice;
            $purchase->salePriceExVat   = $requ->salingPriceWithoutVat;
            $purchase->vatStatus        = $requ->vatStatus;
            $purchase->salePriceInVat   = $requ->salingPriceWithVat;
            $purchase->profit           = $requ->profitMargin;
            $purchase->totalAmount      = $requ->totalPrice;
            $purchase->disType          = $requ->discountStatus;
            $purchase->disAmount        = $requ->discountAmount;
            $purchase->disParcent       = $requ->discountPercent;
            $purchase->grandTotal       = $requ->grandTotal;
            $purchase->paidAmount       = $requ->paidAmount;
            $purchase->dueAmount        = $requ->dueAmount;
            $purchase->specialNote      = $requ->specialNote;
            if($purchase->save()):
                if($requ->serialNumber  && count($requ->serialNumber)>0):
                    $serial = count($requ->serialNumber);
                    $i = 0;
                    while($i<$serial){
                        $newSerial = new ProductSerial();
                        $newSerial->serialNumber = $requ->serialNumber[$i];
                        $newSerial->productId = $requ->productName;
                        $newSerial->save();
                        $i++;
                    }
                endif;
                $prevStock = new ProductStock();
                $prevStock->productId    = $requ->productName;
                $prevStock->purchaseId   = $purchase->id;
                $prevStock->currentStock = $requ->qty;
                $prevStock->save();

                $message = Alert::success('Success!','Data saved successfully');
                return back();
            else:
                $message = Alert::error('Sorry!','Data failed to save');
                return back();
            endif;
        endif;
    }
}
