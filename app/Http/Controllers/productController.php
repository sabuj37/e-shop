<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductUnit;

class productController extends Controller
{
    public function addProduct(){
        $productUnit = ProductUnit::orderBy('id','DESC')->get();
        $category = Category::orderBy('id','DESC')->get();
        $brand = Brand::orderBy('id','DESC')->get();
        $data = Product::orderBy('id','DESC')->get();

        return view('product.newProduct',['listItem'=>$data,'brandList'=>$brand,'categoryList'=>$category,'productUnitList'=>$productUnit]);
   }

   public function saveProduct(Request $req){
        if($req->profileId):
            $data = Product::find($req->profileId);
        else:
            $data = new Product();
        endif;
            $data->name          = $req->name;
            $data->brand         = $req->brand;
            $data->category      = $req->category;
            $data->unitName      = $req->unitName;
            $data->quantity      = $req->quantity;
            $data->details       = $req->details;
            $data->barCode       = $req->barCode;
            $data->currentStock  = $req->currentStock;
            $data->purchasePrice = $req->purchasePrice;
            $data->sellingPrice  = $req->sellingPrice;
            $data->wholesale     = $req->wholesale;

            if($data->save()):
                return redirect(route('addProduct'))->with('success','Success !  Customer profile created successfully');
            else:
                return back()->with('error','Error !  There was an error. Please try agin');
            endif;
    }


    //edit product
     public function editProduct($id){
        $productUnit = ProductUnit::orderBy('id','DESC')->get();
        $category = Category::orderBy('id','DESC')->get();
        $brand = Brand::orderBy('id','DESC')->get();
        $data = product::find($id);
        return view('product.newProduct',['profile'=>$data,'brandList'=>$brand,'categoryList'=>$category,'productUnitList'=>$productUnit]);
    }

    //delete product
    public function delProduct($id){
        $data = Product::find($id);
        if(!empty($data)):
            $data->delete();
            return back()->with('success','Data delete successfully');
        else:
            return back()->with('error','Data failed to delete');
        endif;
    }

    //product list page
    public function productlist(){
        $productUnit = ProductUnit::orderBy('id','DESC')->get();
        $category = Category::orderBy('id','DESC')->get();
        $brand = Brand::orderBy('id','DESC')->get();
        $data = Product::orderBy('id','DESC')->get();
      return view('product.productList',['listItem'=>$data,'brandList'=>$brand,'categoryList'=>$category,'productUnitList'=>$productUnit]);
    }
    
    //addBrand
    public function addBrand(){
      $data = Brand::orderBy('id','DESC')->get();
      return view('product.addBrand',['listItem'=>$data]);
   }
    //save Brand
    public function saveBrand(Request $req){
        if($req->profileId):
            $data = Brand::find($req->profileId);
        else:
            $data = new Brand();
        endif;
            $data->name          = $req->name;

            if($data->save()):
                return redirect(route('addProduct'))->with('success','Success !  Customer profile created successfully');
            else:
                return back()->with('error','Error !  There was an error. Please try agin');
            endif;
    }


    //edit Brand
     public function editBrand($id){
        $data = Brand::find($id);
        return view('product.addBrand',['profile'=>$data]);
    }

    //delete Brand
    public function delBrand($id){
        $data = Brand::find($id);
        if(!empty($data)):
            $data->delete();
            return back()->with('success','Data delete successfully');
        else:
            return back()->with('error','Data failed to delete');
        endif;
    }


    //addCategory
    public function addCategory(){
      $data = Brand::orderBy('id','DESC')->get();
      return view('product.addCategory',['listItem'=>$data]);
   }

    //save Category
    public function saveCategory(Request $req){
        if($req->profileId):
            $data = Category::find($req->profileId);
        else:
            $data = new Category();
        endif;
            $data->name          = $req->name;

            if($data->save()):
                return redirect(route('addProduct'))->with('success','Success !  Customer profile created successfully');
            else:
                return back()->with('error','Error !  There was an error. Please try agin');
            endif;
    }


    //edit Category
     public function editCategory($id){
        $data = Category::find($id);
        return view('product.addCategory',['profile'=>$data]);
    }

    //delete Category
    public function delCategory($id){
        $data = Category::find($id);
        if(!empty($data)):
            $data->delete();
            return back()->with('success','Data delete successfully');
        else:
            return back()->with('error','Data failed to delete');
        endif;
    }


    //addProductUnit
    public function addProductUnit(){
      $data = Brand::orderBy('id','DESC')->get();
      return view('product.addProductUnit',['listItem'=>$data]);
   }
    //save ProductUnit
    public function saveProductUnit(Request $req){
        if($req->profileId):
            $data = ProductUnit::find($req->profileId);
        else:
            $data = new ProductUnit();
        endif;
            $data->name          = $req->name;

            if($data->save()):
                return redirect(route('addProduct'))->with('success','Success !  Customer profile created successfully');
            else:
                return back()->with('error','Error !  There was an error. Please try agin');
            endif;
    }


    //edit ProductUnit
     public function editProductUnit($id){
        $data = ProductUnit::find($id);
        return view('product.addProductUnit',['profile'=>$data]);
    }

    //delete ProductUnit
    public function delProductUnit($id){
        $data = ProductUnit::find($id);
        if(!empty($data)):
            $data->delete();
            return back()->with('success','Data delete successfully');
        else:
            return back()->with('error','Data failed to delete');
        endif;
    }
}
