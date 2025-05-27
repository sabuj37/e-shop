<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class coustomerSupplier extends Controller
{
    // add coustomer
    public function addCustomer(){
        $pos = Customer::orderBy('id','DESC')->get();
        return view('customer&supplier.addCustomer',['listItem'=>$pos]);
    }

    //save custmer
    public function saveCustomer(Request $req){
        $pos = new Customer();

        $pos->name          = $req->fullName;
        $pos->accReceivable = $req->accReceivable;
        $pos->accPayable    = $req->accPayable;
        $pos->mail          = $req->mail;
        $pos->mobile        = $req->mobile;
        $pos->country       = $req->country;
        $pos->state         = $req->state;
        $pos->city          = $req->city;
        $pos->aria          = $req->aria;

        if($pos->save()):
            return back()->with('success','Success !  Customer profile created successfully');
        else:
            return back()->with('Error','Error !  There was an error. Please try agin');
        endif;
    }

    // add supplier
    public function addSupplier(){
        return view('customer&supplier.addSupplier');
    }
}
