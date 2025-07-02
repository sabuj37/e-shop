<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ProvideService;
use Alert;

class serviceController extends Controller
{

//add service
  Public function addServiceName (){
      $data = Service::orderBy('id','DESC')->get();
    return view('service.addService',['listItem'=>$data]);

  }
  
  Public function saveService(Request $req){
    $data = new Service();

    $data->serviceName = $req->serviceName;
    $data->rate = $req->rate;


    if($data->save()):
                Alert::success('Success!','Service profile created successfully');
                return redirect(route('addServiceName'));
            else:
                Alert::error('Failed!','Service profile creation failed');
                return back();
            endif;


  }

  public function editService($id){

  };



  Public function provideService(){
      
    return view('service.provideService');

  }

  

    Public function serviceProvideList(){
      
      return view('service.serviceList');

  }
}
