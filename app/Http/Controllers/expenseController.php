<?php

namespace App\Http\Controllers;
use App\Models\Expense;

use Illuminate\Http\Request;

class expenseController extends Controller
{

    //addExpense
    public function addExpense(){
      $data = Expense::orderBy('id','DESC')->get();
      return view('expense.expensetype',['listItem'=>$data]);
   }

    //save Expense
    public function saveExpense(Request $req){
        if($req->profileId):
            $data = Expense::find($req->profileId);
        else:
            $data = new Expense();
        endif;
            $data->name          = $req->name;

            if($data->save()):
                return redirect(route('addExpense'))->with('success','Success !  Customer profile created successfully');
            else:
                return back()->with('error','Error !  There was an error. Please try agin');
            endif;
    }


    //edit Expense
     public function editExpense($id){
        $data = Expense::find($id);
        return view('expense.expensetype',['profile'=>$data]);
    }

    //delete Expense
    public function delExpense($id){
        $data = Expense::find($id);
        if(!empty($data)):
            $data->delete();
            return back()->with('success','Data delete successfully');
        else:
            return back()->with('error','Data failed to delete');
        endif;
    }
     Public function expense (){
        
      $data = Expense::orderBy('id','DESC')->get();
        return view('expense.expense',['expenseList'=>$data]);

    }

    

    // submit Expense by ajax
    public function createExpense(Request $req){
            $data = new Expense();
            $data->name     = $req->name;
            
            $option="";

            if($data->save()):
                $getData = Expense::orderBy('id','DESC')->get();
                if(!empty($getData)):
                    foreach($getData as $d):
                        $option .='<option value="'.$d->id.'">'.$d->name.'</option>';
                    endforeach;
                endif;
                
                return ['data' => $option, 'message'=>'Success ! Form successfully subjmit.'];
            else:
                return ['data' => $option, 'message'=>'Error ! There is an error. Please try agin.'];
            endif;
    }



}
