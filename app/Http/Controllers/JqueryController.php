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
            $stockHistory       = ProductStock::where(['productId'=>$getData->id])->first();
            if(!empty($stockHistory)):
                $currentStock   = $stockHistory->currentStock;
            else:
                $currentStock   = 0;
            endif;

            $productName = $getData->name;
            // $buyingPrice = $getData->purchasePrice;
            // $productName = $getData->name;
            return ['productName' => $productName,'currentStock' => $currentStock, 'message'=>'Success ! Form successfully subjmit.'];
        else:
            return ['productName' => "",'currentStock' =>"", 'message'=>'Error ! There is an error. Please try agin.'];
        endif;
    }

    public function getSaleProductDetails($id){
        $getProductData = Product::find($id);
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

                $prevStock = ProductStock::where(['productId'=>$requ->productName])->first();
                if(!empty($prevStock)):
                    $currStock = $prevStock->currentStock;
                    $newStock = $currStock+$requ->qty;
                    $prevStock->currentStock  = $newStock;
                    $prevStock->save();
                else:
                    $prevStock = new ProductStock();
                    $prevStock->productId = $requ->productName;
                    $prevStock->currentStock = $requ->qty;
                    $prevStock->save();
                endif;
                $message = Alert::success('Success!','Data saved successfully');
                return back();
            else:
                $message = Alert::error('Sorry!','Data failed to save');
                return back();
            endif;
        endif;
    }
}
