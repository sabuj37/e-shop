<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class expenseController extends Controller
{
     Public function expensetype (){
        return view('expense.expensetype');

    }


     Public function expense (){
        return view('expense.expense');

    }
}
