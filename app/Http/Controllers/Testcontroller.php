<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    
    function showstring($id=null){
        return "welcome to show string function id is:".' '.$id;
    }
    function test1(){
        return view("welcome");
    }
    
}
