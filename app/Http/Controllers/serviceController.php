<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    Public function addServiceName (){
       
        return view('service.addService');

    }

      Public function provideService(){
       
        return view('service.provideService');

    }

    

      Public function serviceProvideList(){
       
        return view('service.serviceList');

    }
}
