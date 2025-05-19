<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userInfo extends Controller
{
    public function userLogin(){
        return view('userInfo.userLogin');
    }
    
    public function userRegister(){
        return view('userInfo.userRegister');
    }
    
    public function userLockScreen(){
        return view('userInfo.userLockScreen');
    }
    
    public function userRecover(){
        return view('userInfo.userRecover');
    }
    
    public function userRecoverCode(){
        return view('userInfo.recoverCode');
    }
    
    public function userRecoverPassword(){
        return view('userInfo.recoverNewPass');
    }
    
    public function userConfirmMail(){
        return view('userInfo.userConfirmMail');
    }

    
    
    public function storeCreat(){
        return view('userInfo.storeCreat');
    }
}
