<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
  // add stock report
    public function addStockReport(){
        return view('report.stockReport');
    }

    // add sale report
    public function addSalesReport(){
        return view('report.salesReport');
    }
    
    // add top  cutomer
    public function addTopCustomerReport(){
        return view('report.topCustomerReport');
    }

}
