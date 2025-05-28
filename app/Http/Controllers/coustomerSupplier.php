<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Supplier;

class coustomerSupplier extends Controller
{
    // add coustomer
    public function addCustomer(){
        $data = Customer::orderBy('id','DESC')->get();
        return view('customer&supplier.addCustomer',['listItem'=>$data]);
    }

    //save custmer
    public function saveCustomer(Request $req){
        if($req->profileId):
            $data = Customer::find($req->profileId);
        else:
            $data = new Customer();
        endif;
            $data->name          = $req->fullName;
            $data->accReceivable = $req->accReceivable;
            $data->accPayable    = $req->accPayable;
            $data->mail          = $req->mail;
            $data->mobile        = $req->mobile;
            $data->country       = $req->country;
            $data->state         = $req->state;
            $data->city          = $req->city;
            $data->aria          = $req->aria;

            if($data->save()):
                return redirect(route('addCustomer'))->with('success','Success !  Customer profile created successfully');
            else:
                return back()->with('Error','Error !  There was an error. Please try agin');
            endif;
    }

    //edit customer
     public function editCustomer($id){
        $data = Customer::find($id);
        return view('customer&supplier.addCustomer',['profile'=>$data]);
    }

    // add supplier
    public function addSupplier(){
        $data = Supplier::orderBy('id','DESC')->get();
        return view('customer&supplier.addSupplier',['listItem'=>$data]);
    }

    //save supplier
    public function saveSupplier(Request $req){
        if($req->profileId):
            $data = Supplier::find($req->profileId);
        else:
            $data = new Supplier();
        endif;
            $data->name          = $req->fullName;
            $data->accReceivable = $req->accReceivable;
            $data->accPayable    = $req->accPayable;
            $data->mail          = $req->mail;
            $data->mobile        = $req->mobile;
            $data->country       = $req->country;
            $data->state         = $req->state;
            $data->city          = $req->city;
            $data->aria          = $req->aria;

            if($data->save()):
                return redirect(route('addSupplier'))->with('success','Success !  Supplier profile created successfully');
            else:
                return back()->with('Error','Error !  There was an error. Please try agin');
            endif;
    }

    //edit supplier
     public function editSupplier($id){
        $data = Supplier::find($id);
        return view('customer&supplier.addSupplier',['profile'=>$data]);
    }
}
