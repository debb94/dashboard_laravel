<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller{

    public function checkSession(){
        if(session()->get("auth") != true){
            return false;
        }else{
            return true;
        }
    }
}
